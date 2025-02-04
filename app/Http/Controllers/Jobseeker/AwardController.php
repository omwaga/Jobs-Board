<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Award;

class AwardController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function index()
    {
        $awards = Award::where('user_id', auth()->user()->id)->get();
        return $awards;
    }

    public function store(Request $request)
    {
    	$attributes = $request->validate([
    		'award_name' => ['required', 'min:3'],
    		'degree_name' => 'required|min:3',
    	]);

		Award::create($attributes + ['user_id' => auth()->user()->id]);
    }

    public function destroy(Award $award)
    {
        $award->delete();
    }
}
