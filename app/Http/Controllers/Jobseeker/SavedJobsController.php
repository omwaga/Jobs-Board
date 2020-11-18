<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\SavedJobs;
use App\Vacancy;
use App\Category;
use App\City;
use App\JobType;

class SavedJobsController extends Controller
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
    	$vacancies = SavedJobs::where('user_id', auth()->user()->id)->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

    	return view('backend.jobseeker.saved-jobs', compact('vacancies', 'categories', 'locations', 'job_types'));
    }

    public function store(Request $request){

    	SavedJobs::create(['vacancy_id' => $request->vacancy_id, 'user_id' => auth()->user()->id]);

		Alert::Success('Success!', 'Job post saved successfully')->position('top-right')->toToast();

		return back();
    }

    public function destroy(SavedJobs $savedjob)
    {
        $savedjob->delete();

        Alert::Success('Success!', 'Saved job removed successfully')->position('top-right')->toToast();

        return back();
    }
}
