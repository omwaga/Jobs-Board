<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Internship;

use Illuminate\Http\Request;

class InternshipController extends Controller
{
    public function store(Request $request)
    {
    	$attributes = request()->validate([
    		'organization' => 'required|min:3',
    		'position' => 'required|min:3',
    		'start_date' => 'required',
    		'end_date' => 'nullable',
    		'current_internship' => 'nullable',
    		'responsibilities' => 'nullable',
    	]);

		Internship::create($attributes + ['user_id' => auth()->user()->id]);

		Alert::Success('Success!', 'Internship details saved successfully')->position('top-right')->toToast();

		return back();
    }
}
