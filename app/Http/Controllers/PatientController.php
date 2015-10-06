<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PatientController extends Controller
{
	protected function validator(array $data)
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
        $data = ['success' => true];

        return view('patient.profile')->with($data);
    }
}
