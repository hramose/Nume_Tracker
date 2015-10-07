<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $nutritionistFile->final_hour = $data['initial_hour'];
        $nutritionistFile->save();

        return \Redirect::to('perfil');
    }
}
