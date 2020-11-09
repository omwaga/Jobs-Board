<?php

namespace App\Http\Controllers\Jobseeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\UserLevel;
use User;

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

    public function update(Request $request)
    { 
        $userLevel = UserLevel::where('user_id', auth()->user()->id)->first(); 
        $userLevel->update(['level' => $request->level]);

        Alert::Success('Success!', 'Level Updated successfully')->position('top-right')->toToast();

        return back();
    }
}
