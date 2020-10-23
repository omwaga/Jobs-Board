<?php

namespace App\Http\Controllers\Jobseeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserLevel;

class UserLevelController extends Controller
{
    public function store(Request $request)
    {
    	UserLevel::create(['level' => $request->level, 'user_id' => auth()->user()->id]);

    	if ($request->level === 'professional') {
    		return redirect(route('jobseeker.professional'));
    	}
    	return redirect(route('jobseeker.fresher'));
    }

    public function update(){
    	dd('hello');
    }
}
