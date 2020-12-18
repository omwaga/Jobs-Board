<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use App\Internship;

use Illuminate\Http\Request;

class InternshipController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function index()
    {
        $internships = Internship::where('user_id', auth()->user()->id)->get();
        return $internships;
    }

    public function show(Internship $internship)
    {
        return $internship;
    }

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
    }

    public function destroy(Internship $internship)
    {
        $internship->delete();
    }
}
