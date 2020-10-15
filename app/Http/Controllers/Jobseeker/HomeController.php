<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\JobType;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.jobseeker.dashboard');
    }

    public function levelSelection()
    {
        return view('backend.jobseeker.level-selection');
    }

    public function fresherProfile()
    {
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        return view('backend.jobseeker.fresher-profile', compact('categories', 'locations', 'job_types'));
    }

    public function professionalProfile()
    {
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        return view('backend.jobseeker.professional-profile', compact('categories', 'locations', 'job_types'));
    }
}
