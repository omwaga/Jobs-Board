<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vacancy;
use App\Category;
use App\City;
use App\JobType;

class PagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function userProfile()
    {
    	return view('backend.jobseeker.profile');
    }

    public function vacancies()
    {
    	$vacancies = Vacancy::orderBy('created_at', 'DESC')->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

    	return view('backend.jobseeker.vacancies', compact('vacancies', 'categories', 'locations', 'job_types'));
    }

    public function singleJob($slug)
    {
    	$job = Vacancy::where('slug', '=', $slug)->first();
        $related_jobs = Vacancy::limit(4)->get();
        $categories = Category::all();

    	return view('backend.jobseeker.single-job', compact('job', 'related_jobs', 'categories'));
    }

    public function categorySlug($categorySlug)
    {
        return $categorySlug;
    }
}
