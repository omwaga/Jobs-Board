<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Country;
use App\City;
use App\Industry;
use App\CompanyType;
use App\Category;

class PagesController extends Controller
{
    public function home()
    {
    	return view('front.index');
    }


    public function candidates()
    {
    	return view('front.candidates');
    }


    public function vacancies()
    {
    	return view('front.vacancies');
    }


    public function post()
    {
        $countries = DB::table('countries')->pluck("name","id");
        $cities = City::all();
        $industries = Industry::all();
        $company_types =  CompanyType::all();
        $categories = Category::all();

    	return view('front.post-vacancy', compact('countries', 'cities', 'industries', 'company_types', 'categories'));
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
