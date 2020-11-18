<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    
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

		Alert::Success('Success!', 'Project details saved successfully')->position('top-right')->toToast();

		return back();
    }

    public function destroy(Project $project)
    {
        $project->delete();
    }
}
