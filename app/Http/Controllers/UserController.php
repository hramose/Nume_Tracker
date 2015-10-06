<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function profile()
    {
    	if(!\Auth::guest())
    	{
    		switch (\Auth::user()->role) {
    			case 'patient':
    				return view('patient.profile')->with(['success' => false]);
    			break;
    			case 'nutritionist':
    				return 'aqui va la vista de perfil de nutriologo';
    			break;
    			case 'admin':
    				return 'perfil admin?';
    			break;
    		}
    	}

    	return redirect('/');
    }
}
