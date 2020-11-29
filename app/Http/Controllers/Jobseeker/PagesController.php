<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vacancy;
use App\Category;
use App\City;
use App\JobType;
use Artesaos\SEOTools\Facades\SEOMeta;

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

    public function fillDetails()
    {
        return view('backend.jobseeker.details-master');
    }

    public function categorySlug($categorySlug)
    {
        $categoryId = Category::where('slug', $categorySlug)->value('id');
        $page_banner = Category::where('slug', $categorySlug)->first();
        $vacancies = Vacancy::where([['category', $categoryId],['status', 'published']])->orderBy('created_at', 'DESC')->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();



        SEOMeta::setTitle($page_banner->name.' Jobs in Kenya');

        return view('backend.jobseeker.categories', compact('vacancies', 'page_banner', 'categories', 'locations', 'job_types'));
    }

    public function typeSlug($typeSlug)
    {
        $typeId = JobType::where('slug', $typeSlug)->value('id');
        $type = JobType::where('slug', $typeSlug)->first();
        $vacancies = Vacancy::where([['job_type', $typeId ],['status', 'published']])->orderBy('created_at', 'DESC')->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();


        SEOMeta::setTitle($type->name. ' Jobs in Kenya');
        SEOMeta::setDescription($type->description);

        return view('backend.jobseeker.job-types', compact('vacancies', 'categories', 'locations', 'job_types'));
    }

    public function locationSlug($locationSlug)
    {
        $locationId = City::where('slug', $locationSlug)->value('id');
        $location = City::where('slug', $locationSlug)->first();
        $vacancies = Vacancy::where([['city', $locationId],['status', 'published']])->orderBy('created_at', 'DESC')->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        SEOMeta::setTitle(' Jobs in '. $location->name);
        SEOMeta::setDescription($location->description);

        return view('backend.jobseeker.locations', compact('vacancies', 'categories', 'locations', 'job_types'));
    }
}
