<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Application;
use Auth;
use App\User;

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
			$applications = Application::where('employer_id', auth()->user()->id)->orderby('created_at', 'DESC')->get();
		}

		return view('backend.applications', compact('applications'));
	}

	public function applicant($id)
	{
		$applicant = User::where('id', $id)->first();

		return view('backend.applicant', compact('applicant'));
	}

	public function companys()
	{
		dd ('hello');
	}
}
