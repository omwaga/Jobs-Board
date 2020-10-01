<?php

namespace App\Http\Controllers\Jobseeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
    	dd('hello');
    }

    public function create()
    {
    	return view('backend.jobseeker.create-application');
    }
}
