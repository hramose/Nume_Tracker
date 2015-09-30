<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
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
}
