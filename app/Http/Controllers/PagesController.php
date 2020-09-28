<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use DB;
use App\Country;
use App\City;
use App\Industry;
use App\CompanyType;
use App\Category;
use App\JobType;
use App\PostingSubscription;
use App\Vacancy;

class PagesController extends Controller
{
    public function home()
    {
        $vacancies = Vacancy::orderBy('created_at', 'DESC')->get();
        $top_categories = Category::orderBy('created_at', 'DESC')->limit(8)->get();

        SEOMeta::setTitle('Home');
    	return view('front.index', compact('vacancies', 'top_categories'));
    }


    public function candidates()
    {
    	return view('front.candidates');
    }


    public function vacancies()
    {
        $vacancies = Vacancy::orderBy('created_at', 'DESC')->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

    	return view('front.vacancies', compact('vacancies', 'categories', 'locations', 'job_types'));
    }

    public function singlejob($slug)
    {
        $related_jobs = Vacancy::orderBy('created_at', 'DESC')->limit(8)->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        return view('front.single-job', compact('related_jobs', 'categories', 'locations', 'job_types'));
    }

    public function categorySlug($categorySlug)
    {
        $categoryId = Category::where('slug', $categorySlug)->value('id');
        $vacancies = Vacancy::where('category', $categoryId)->orderBy('created_at', 'DESC')->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        return view('front.categories', compact('vacancies', 'categories', 'locations', 'job_types'));
    }

    public function locationSlug($locationSlug)
    {
        $locationId = City::where('slug', $locationSlug)->value('id');
        $vacancies = Vacancy::where('city', $locationId)->orderBy('created_at', 'DESC')->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        return view('front.locations', compact('vacancies', 'categories', 'locations', 'job_types'));
    }

    public function typeSlug($typeSlug)
    {
        $typeId = JobType::where('slug', $typeSlug)->value('id');
        $vacancies = Vacancy::where('job_type', $typeId)->orderBy('created_at', 'DESC')->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        return view('front.job-types', compact('vacancies', 'categories', 'locations', 'job_types'));
    }

    public function post()
    {
        $countries = DB::table('countries')->pluck("name","id");
        $cities = City::all();
        $industries = Industry::all();
        $company_types =  CompanyType::all();
        $categories = Category::all();
        $job_types = JobType::all();
        $posting_subscriptions = PostingSubscription::all();

    	return view('front.post-vacancy', compact('countries', 'cities', 'industries', 'company_types', 'categories', 'job_types', 'posting_subscriptions'));
    }

    public function employerregister()
    {
        $countries = DB::table('countries')->pluck("name","id");
        $cities = City::all();
        $industries = Industry::all();
        $company_types =  CompanyType::all();

        return view('auth.employer-register', compact('countries', 'cities', 'industries', 'company_types'));
    }

    public function jobseekerregister()
    {
        return view('auth.jobseeker-register');
    }

}
