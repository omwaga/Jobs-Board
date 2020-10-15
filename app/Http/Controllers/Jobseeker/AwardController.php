<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Award;

class AwardController extends Controller
{
    public function store(Request $request)
    {
    	$attributes = $request->validate([
    		'award_name' => ['required', 'min:3'],
    		'degree_name' => 'required|min:3',
    	]);

		Award::create($attributes + ['user_id' => auth()->user()->id]);

		Alert::Success('Success!', 'Award details saved successfully')->position('top-right')->toToast();

		return back();
    }
}
