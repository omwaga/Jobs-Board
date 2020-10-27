<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::where('user_id', auth()->user()->id)->get();
        return $experiences;
    }

    public function store(Request $request)
    {
    	$attributes = $request->validate([
    		'organization' => ['required', 'min:3'],
    		'position' => ['required', 'min:3'],
    		'start_date' => ['required'],
    		'end_date' => ['nullable'],
    		'current_work' => ['nullable'],
    		'responsibilities' => ['nullable'],
    	]);

		Experience::create($attributes + ['user_id' => auth()->user()->id]);

		Alert::Success('Success!', 'Experience details saved successfully')->position('top-right')->toToast();

		return back();
    }
}
