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
        $vacancies = Vacancy::where('status', 'published')->orderBy('created_at', 'DESC')->paginate(5);
        $top_categories1 = Category::all()->random(4);
        $top_categories2 = Category::all()->random(4);
        $top_categories3 = Category::all()->random(4);
        $top_categories4 = Category::all()->random(4);
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        SEOMeta::setTitle('Recruitable Jobs In Kenya');
        return view('front.index', compact('vacancies', 'top_categories1', 'top_categories2', 'top_categories3', 'top_categories4', 'categories', 'locations', 'job_types'));
    }


    public function candidates()
    {
    	return view('front.candidates');
    }


    public function vacancies()
    {
        $vacancies = Vacancy::where('status', 'published')->orderBy('created_at', 'DESC')->paginate(15);
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();
        $top_categories1 = Category::all()->random(4);
        $top_categories2 = Category::all()->random(4);
        $top_categories3 = Category::all()->random(4);
        $top_categories4 = Category::all()->random(4);

        SEOMeta::setTitle('Jobs In Kenya');

        return view('front.vacancies', compact('vacancies', 'top_categories1', 'top_categories2', 'top_categories3', 'top_categories4', 'categories', 'locations', 'job_types'));
    }

    public function singlejob($slug)
    {
        $job = Vacancy::where('slug', '=', $slug)->first();
        $page_banner = Vacancy::where('slug', '=', $slug)->first();
        $related_jobs = Vacancy::orderBy('created_at', 'DESC')->limit(8)->get();
        $similar_jobs = Vacancy::orderBy('created_at', 'DESC')->limit(8)->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();


        SEOMeta::setTitle($job->job_title);

        return view('front.single-job', compact('related_jobs', 'page_banner', 'categories', 'locations', 'job_types', 'job', 'similar_jobs'));
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

        return view('front.categories', compact('vacancies', 'page_banner', 'categories', 'locations', 'job_types'));
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

        return view('front.locations', compact('vacancies', 'categories', 'locations', 'job_types'));
    }

    public function typeSlug($typeSlug)
    {
        $typeId = JobType::where('slug', $typeSlug)->value('id');
        $vacancies = Vacancy::where([['job_type', $typeId ],['status', 'published']])->orderBy('created_at', 'DESC')->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        return view('front.job-types', compact('vacancies', 'categories', 'locations', 'job_types'));
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

    public function search(Request $request)
    {
        if($request->search !== null)
        {
            $search = Vacancy::where('job_title', 'LIKE', "%{$request->search}%")->get();

            return $search;  
        }
        else if($request->category !== null)
        {
            $search = Vacancy::where('category', $request->category)->get();

            return $search;  
        }
        else if($request->location !== null)
        {
            $search = Vacancy::where('city', $request->location)->get();

            return $search;  
        }
        else if($request->job_type !== null)
        {
            $search = Vacancy::where('job_type', $request->job_type)->get();

            return $search;  
        }
    }

}
