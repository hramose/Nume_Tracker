<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function showUsersList(Request $request)
    {
    	$sort = $request->get('orden');

    	if($sort == ''){
    		$sort = 'id_asc';
    	}

    	$users = User::where('role','!=','admin')
    				   ->username($request->get('nombre'))
    				   ->role($request->get('rol'))
    				   ->orderbyoption($sort)
    				   ->paginate(10);

    	return view('admin.users-list',compact('users'));
    }

    public function deleteUser(Request $request)
    {
    	$data = $request->all();
    	$name = $data['name'];
    	$user = User::find($data['user_id']);
    	$user->delete();

    	return redirect('admon-usuarios')->with('success','Se ha eliminado al usuario '.$name.' con éxito.');
    }

    public function showPatientProfile($id)
    {
    	$user = User::find($id);

    	return view('admin.p-profile',compact('user'));
    }

    protected function patientValidator(array $data)
    {
        return Validator::make($data,[
            'photo'=> 'image',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'birthday' => 'required|date',
            'gender' => 'required',
            'phone' => 'numeric',
            'street' => 'max:50',
            'number' => 'numeric',
            'neighborhood' => 'max:50',
            'zip_code' => 'numeric',
            'city' => 'max:50',
            'state' => 'max:50',
            'country' => 'max:50',
        ]);
    }

    public function updatePatientProfile(Request $request,$id)
    {
        $data = $request->all();
        $validator = $this->patientValidator($data);

        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }

        $user = User::find($id);

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

        return redirect('paciente/'.$id)->with('success','Se han guardado los cambios con éxito.');
    }

    public function nutritionistValidator(array $data)
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

    public function showNutritionistProfile($id)
    {
        $user = User::find($id);

        return view('admin.n-profile',compact('user'));
    }

    public function updateNutritionistProfile(Request $request,$id)
    {
        $data = $request->all();
        $validator = $this->nutritionistValidator($data);

        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }

        $user = User::find($id);

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

        return redirect('nutriologo-p/'.$id)->with('success','Se han guardado los cambios con éxito.');
    }


}
