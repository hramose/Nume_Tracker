<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
		switch (\Auth::user()->role) {
			case 'patient':
                return redirect('perfil-paciente');
			break;
			case 'nutritionist':
				return redirect('perfil-nutriologo');
			break;
			default:
				return redirect('/');
			break;
		}
    }
}
