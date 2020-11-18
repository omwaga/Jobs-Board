<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Skill;

class SkillController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function index()
    {
        $skills = Skill::where('user_id', auth()->user()->id)->get();
        return $skills;
    }

    public function store(Request $request)
    {
    	$attributes = $request->validate([
    		'name' => ['required', 'min:3'],
    	]);

		Skill::create($attributes + ['user_id' => auth()->user()->id]);

		Alert::Success('Success!', 'Skill saved successfully')->position('top-right')->toToast();

		return back();
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
    }
}
