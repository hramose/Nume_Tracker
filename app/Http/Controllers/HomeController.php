<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	return view('pages.home');
    }

    public function description()
    {
    	return view('pages.nume');
    }

    public function nutrition()
    {
    	return view('pages.nutrition');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function sendContactMessage(Request $request)
    {
        $data = $request->all();
        $validator = $this->messageValidator($data);

        if($validator->passes()){
            \Mail::send('pages.contactMessage', $data, function($message) use ($data)
            {
                $message->from($data['email']);
                $message->subject('[Nume Tracker] Mensaje generado: '.date("Y-m-d H:i:s"));
                $message->to(env('CONTACT_MAIL'));
            });

            return view('pages.thanks');
        }
        else{
            return view('pages.contact')->withErrors($validator);
        }
    }

    protected function messageValidator(array $data){

        return Validator::make($data,[
            'name' => 'required|max:50',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'numeric',
            'body' => 'required',
            'captcha' => 'required|captcha'
            ],['captcha' => 'Captcha is incorrect.']);
    }
}
