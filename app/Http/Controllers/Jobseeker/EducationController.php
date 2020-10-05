<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Education;

class EducationController extends Controller
{
    public function store(Request $request)
    {
    	$attributes =  request()->validate([
    		'education_level' => 'required',
    		'course' => 'required',
    		'institution' => 'required',
    		'graduation_year' => 'required',
    		'course_type' => 'required',
    		'score' => 'required',
    	]);

		Education::create($attributes + ['user_id' => auth()->user()->id]);

		Alert::Success('Success!', 'Education details saved successfully')->position('top-right')->toToast();

		return back();

    }
}
