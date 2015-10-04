<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\NutritionistFile;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/';

    protected $loginPath = '/';

    protected $redirectTo = '/';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if( $data['role'] == 'patient' ){
            $validator = Validator::make($data,[
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required_with:password',
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
            'captcha' => 'required|captcha'
            ],['captcha' => 'Captcha is incorrect.']);
        }
        else{
            $validator = Validator::make($data,[
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required_with:password',
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
            'office_phone' => 'required',
            'initial_hour' => 'string',
            'final_hour' => 'string',
            'captcha' => 'required|captcha'
            ],['captcha' => 'Captcha is incorrect.']);
        }

        return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'role' => $data['role'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'photo'=> $data['photo'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'birthday' => $data['birthday'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'street' => $data['street'],
            'number' => $data['number'],
            'neighborhood' => $data['neighborhood'],
            'zip_code' => $data['zip_code'],
            'city' => $data['city'],
            'state' => $data['state'],
            'country' => $data['country']
        ]);

        if($user && is_object($data['photo'])){
            $photo = $data['photo'];
            $name = str_replace('.','_'.$user->id.'.',$photo->getClientOriginalName());
            \Storage::disk('local')->put($name,  \File::get($photo));
            $user->photo = $name;
            $user->save();
        }
        
        if($data['role'] == 'nutritionist'){
            $nutritionist = Nutritionist_file::create([
                'user_id' => $user->id,
                'grade' => $data['grade'],
                'license' => $data['license'],
                'speciality' => $data['speciality'],
                'about_me' => $data['about_me'],
                'office_phone' => $data['office_phone'],
                'mon' => array_key_exists('Mon', $data),
                'tue' => array_key_exists('Tue', $data),
                'wed' => array_key_exists('Wed', $data),
                'thu' => array_key_exists('Thu', $data),
                'fri' => array_key_exists('Fri', $data),
                'sat' => array_key_exists('Sat', $data),
                'sun' => array_key_exists('Sun', $data),
                'initial_hour' => $data['initial_hour'],
                'final_hour' => $data['initial_hour']
            ]);
        }

        return $user;
    }
}
