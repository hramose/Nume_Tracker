<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request as R2;

class NutritionistController extends Controller
{
    public function showProfile()
    {
        return view('nutritionist.profile');
    }

	protected function validator(array $data)
    {
        return Validator::make($data,[
            'photo'=> 'image',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'birthday' => 'required|date',
            'gender' => 'required',
            'phone' => 'numeric',
            'grade' => 'required',
            'license' => 'required|alpha_num',
            'street' => 'required|max:50',
            'number' => 'required|numeric',
            'neighborhood' => 'required|max:50',
            'zip_code' => 'required|numeric',
            'city' => 'required|max:50',
            'state' => 'required|max:50',
            'country' => 'required|max:50',
            'office_phone' => 'numeric|required',
            'initial_hour' => 'string',
            'final_hour' => 'string',
        ]);
    }

    public function saveProfile(Request $request)
    {
    	$data = $request->all();
    	$validator = $this->validator($data);

    	if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }

        $user = User::find(\Auth::user()->id);

        if(is_object($data['photo'])){
            $photo = $data['photo'];
            $name = str_replace('.','_'.$user->id.'.',$photo->getClientOriginalName());
            \Storage::disk('local')->put($name,  \File::get($photo));
            $user->photo = $name;
        }

        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->birthday = $data['birthday'];
        $user->gender = $data['gender'];
        $user->phone = $data['phone'];
        $user->street = $data['street'];
        $user->number = $data['number'];
        $user->neighborhood = $data['neighborhood'];
        $user->zip_code = $data['zip_code'];
        $user->city = $data['city'];
        $user->state = $data['state'];
        $user->country = $data['country'];
        $user->save();

        $nutritionistFile = $user->nutritionistFile;
        $nutritionistFile->user_id = $user->id;
        $nutritionistFile->grade = $data['grade'];
        $nutritionistFile->license = $data['license'];
        $nutritionistFile->speciality = $data['speciality'];
        $nutritionistFile->about_me = $data['about_me'];
        $nutritionistFile->office_phone = $data['office_phone'];
        $nutritionistFile->mon = array_key_exists('Mon', $data);
        $nutritionistFile->tue = array_key_exists('Tue', $data);
        $nutritionistFile->wed = array_key_exists('Wed', $data);
        $nutritionistFile->thu = array_key_exists('Thu', $data);
        $nutritionistFile->fri = array_key_exists('Fri', $data);
        $nutritionistFile->sat = array_key_exists('Sat', $data);
        $nutritionistFile->initial_hour = $data['initial_hour'];
        $nutritionistFile->final_hour = $data['final_hour'];
        $nutritionistFile->save();

        return redirect('perfil-nutriologo')->with('success','Se han guardado los cambios con éxito.');
    }

    public function showDirectory()
    {
        $users = User::where('role', '=', 'nutritionist')->paginate(5);

        return view('patient.nutritionist-list',compact('users'));
    }

    public function showFile($id)
    {
        $user = User::find($id);

        return view('patient.nutritionist-file',compact('user'));
    }

    public function showSchedule()
    {
        $meetings = Meeting::where('nutritionist_id','=',\Auth::user()->id)
                           //->orderBy('date_time','ASC')
                           ->paginate(10);

        return view('nutritionist.meetings',compact('meetings'));
    }

    public function cancelMeeting($id)
    {
        $meeting = Meeting::find($id);
        $meeting->delete();

        return redirect('citas')->with('success','Se ha cancelado la cita con éxito.');
    }

    public function updateMeeting(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data,[
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'waist' => 'required|numeric',
            'hip' => 'required|numeric',
            'arm_perimeter' => 'required|numeric',
            'bicipital' => 'required|numeric',
            'tricipital' => 'required|numeric',
            'plan' => 'mimes:pdf',
            'comment' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('citas')->with('errors',$validator->errors());
        }
        else{

            $meeting = Meeting::find(intval($data['id']));
            $plan = $data['plan'];

            if(is_object($plan)){
                $name = 'plan_'.$meeting->id.'.pdf';
                \Storage::disk('local')->put($name,  \File::get($plan));
                $meeting->plan = 'plan_'.$meeting->id.'.pdf';
            }

            $meeting->status = 'accomplished';
            $meeting->review = 5;
            $meeting->weight = $data['weight']; 
            $meeting->height = $data['height']; 
            $meeting->waist = $data['waist']; 
            $meeting->hip = $data['hip']; 
            $meeting->arm_perimeter = $data['arm_perimeter']; 
            $meeting->bicipital = $data['bicipital']; 
            $meeting->tricipital = $data['tricipital']; 
            $meeting->bmi = round(floatval(($meeting->weight/pow(($meeting->height/100),2))),1); //Formula IMC
            $meeting->ideal_weight = round(floatval((0.75*($meeting->height-150))+55),1);
            $meeting->comment = $data['comment']; 
            $meeting->save();

            $nutritionistFile = $meeting->nutritionist->nutritionistFile;
            $nutritionistFile->reviews = $nutritionistFile->reviews + 1;
            $currentScore = $nutritionistFile->score;
            $nutritionistFile->score = $currentScore + 5;
            $nutritionistFile->ranking = round(($nutritionistFile->score/$nutritionistFile->reviews),1);
            $nutritionistFile->save();

            $info_mail = ['obj' => $meeting->patient->email,'date' => $meeting->getScheduleDateTime(),'name' => $meeting->nutritionist->getCompleteName()];

            \Mail::send('patient.notificationMessage', $info_mail, function($message) use ($info_mail)
            {
                $message->from('info@numetracker.app');
                $message->subject('[Nume Tracker] Tienes una nueva actualización, mensaje generado '.date("Y-m-d H:i:s"));
                $message->to($info_mail['obj']);
            });

            return redirect('citas')->with('success','Se han guardado los cambios en el record con éxito.');
        }
    }

    public function showHcn($id)
    {
        $user = User::find($id);

        return view('nutritionist.patient-hcn',compact('user'));
    }
}
