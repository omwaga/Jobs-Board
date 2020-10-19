<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Application;
use Auth;

class AdminController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}

    //return the admin dashbaoard
	public function dashboard()
	{
		return view('backend.index');
	}

	public function applications()
	{    	
		if(Auth::user()->hasRole('admin'))
		{
			$applications = Application::orderby('created_at', 'DESC')->get();
		}
		else{
			$applications = Application::orderby('created_at', 'DESC')->get();
		}

		return $applications;
	}
}
