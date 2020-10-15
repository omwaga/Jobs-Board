<?php

namespace App\Http\Controllers\Jobseeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vacancy;
use App\Documents;

class ApplicationController extends Controller
{    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
    	dd('hello');
    }

    public function create($job)
    {
        $vacancy = Vacancy::findOrFail($job);
        $cv = Documents::where('user_id', auth()->user()->id)->first();

    	return view('backend.jobseeker.create-application', compact('vacancy', 'cv'));
    }
}
