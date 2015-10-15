<?php

namespace App\Http\Controllers;

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
}
