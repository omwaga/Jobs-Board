<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Education;

class EducationController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function index()
    {
        $educations = Education::where('user_id', auth()->user()->id)->get();
        return $educations;
    }

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

    }

    public function destroy(Education $education)
    {
        $education->delete();
    }
}
