<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use App\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $projects = Project::where('user_id', auth()->user()->id)->get();
        return $projects;
    }

    public function store(Request $request)
    {
    	$attributes = request()->validate([
    		'project_name' => 'required',
    		'description' => 'nullable'
    	]);

		Project::create($attributes + ['user_id' => auth()->user()->id]);

		return back();
    }

    public function destroy(Project $project)
    {
        $project->delete();
    }
}
