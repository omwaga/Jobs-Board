<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\JobseekerDetail;

class JobseekerDetailController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function index()
    {
        $details = JobseekerDetail::with(['city', 'home'])->where('user_id', auth()->user()->id)->first();
        return $details;
    }

	public function store(Request $request)
	{
		$attributes = request()->validate([
			'first_name' => 'required|min:3',
			'last_name' => 'required|min:3',
			'phone_number' => 'required|min:9',
			'gender' => 'required',
			'date_of_birth' => 'required',
			'email' => 'required',
			'home_city' => 'required',
			'current_location' => 'required',
			'when_to_start' => 'required',
			'preferred_location' => 'required',
			'job_type' => 'required',
		]);

		JobseekerDetail::create($attributes + ['user_id' => auth()->user()->id]);

	}

	public function update(JobseekerDetail $detail,Request $request)
	{
		$detail->update(request(['first_name', 'last_name', 'phone_number', 'gender', 'date_of_birth', 'email', 'home_city', 'current_location', 'when_to_start', 'preferred_location', 'job_type']));

	}
}
