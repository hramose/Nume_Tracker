<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PatientController extends Controller
{
    public function showProfile()
    {
        return view('patient.profile');
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

        return redirect('perfil-paciente')->with('success','Se han guardado los cambios con êxito.');
    }

    public function showHcn()
    {
        return view('patient.hcn');
    }

    public function saveHcn(Request $request)
    {
        $data = $request->all();
        $user = User::find(\Auth::user()->id);
        $cnh = $user->cnHistory;

        $cnh->ms = $data['ms'];
        $cnh->oc = $data['oc'];
        $cnh->sc = $data['sc'];
        $cnh->re = $data['re'];
        $cnh->sd = $data['sd'];
        $cnh->hm = $data['hm'];
        $cnh->dt = $data['dt'];
        $cnh->sw = $data['sw'];
        $cnh->or = $data['or'];
        $cnh->ud = $data['ud'];
        $cnh->wd = $data['wd'];
        $cnh->ap1 = array_key_exists('ap1', $data);
        $cnh->ap2 = array_key_exists('ap2', $data);
        $cnh->ap3 = array_key_exists('ap3', $data);
        $cnh->ap4 = array_key_exists('ap4', $data);
        $cnh->ap5 = array_key_exists('ap5', $data);
        $cnh->ap6 = array_key_exists('ap6', $data);
        $cnh->ap7 = array_key_exists('ap7', $data);
        $cnh->ap8 = array_key_exists('ap8', $data);
        $cnh->te = $data['te'];
        $cnh->dd = $data['dd'];
        $cnh->im = $data['im'];
        $cnh->usd = $data['usd'];
        $cnh->whd = $data['whd'];
        $cnh->swu = $data['swu'];
        $cnh->sur = $data['sur'];
        $cnh->obe = array_key_exists('obe', $data);
        $cnh->can = array_key_exists('can', $data);
        $cnh->dia = array_key_exists('dia', $data);
        $cnh->ahi = array_key_exists('ahi', $data);
        $cnh->hip = array_key_exists('hip', $data);
        $cnh->hep = array_key_exists('hep', $data);
        $cnh->fia = $data['fia'];
        $cnh->ext = $data['ext'];
        $cnh->fre = $data['fre'];
        $cnh->dur = $data['dur'];
        $cnh->wst = $data['wst'];
        $cnh->smo = $data['smo'];
        $cnh->dal = $data['dal'];
        $cnh->dco = $data['dco'];
        $cnh->save();

        return redirect('historia-clinica')->with('success','Se han guardado los cambios con êxito.');
    }
}
