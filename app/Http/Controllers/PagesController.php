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

        SEOMeta::setTitle('Home');
    	return view('front.index', compact('vacancies'));
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

    public function singlejob($name)
    {
        $related_jobs = Vacancy::orderBy('created_at', 'DESC')->limit(8)->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        return view('front.single-job', compact('related_jobs', 'categories', 'locations', 'job_types'));
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
