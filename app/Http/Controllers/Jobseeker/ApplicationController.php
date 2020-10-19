<?php

namespace App\Http\Controllers\Jobseeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Vacancy;
use App\Country;
use App\City;
use App\Application;
use App\Documents;

class ApplicationController extends Controller
{    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
    	dd('hello');
    }

    public function create($job)
    {
        $vacancy = Vacancy::findOrFail($job);
        $cv = Documents::where('user_id', auth()->user()->id)->first();
        $countries = Country::all();
        $cities = City::all();

    	return view('backend.jobseeker.create-application', compact('vacancy', 'countries', 'cities', 'cv'));
    }

    public function store(Request $request, $job)
    {
        $attributes = request()->validate([
            'full_name' => 'required|min:3|string',
            'phone_number' => 'required|min:9',
            'email' => 'required|email',
            'country' => 'required',
            'city' => 'required',
            'resume' => 'required',
            'cover_letter' => 'nullable'
        ]);

        if ($request->hasFile('resume')) {
            $attributes['resume'] = $request->resume->getClientOriginalName();
            $request->resume->storeAs('public/resumes', $attributes['resume']);
        }

        if ($request->hasFile('cover_letter')) {
            $attributes['cover_letter'] = $request->cover_letter->getClientOriginalName();
            $request->cover_letter->storeAs('public/cover_letters', $attributes['cover_letter']);
        }

        Application::create($attributes + ['user_id' => auth()->user()->id,'vacancy_id' => $job]);

        Alert::Success('Success!', 'Job application sent successfully')->position('top-right')->toToast();

        return redirect(route('jobseeker.application.success'));
    }

    public function success()
    {
        return view('backend.jobseeker.application-success');
    }
}
