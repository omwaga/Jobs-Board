<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Vacancy;
use App\Country;
use App\JobType;
use App\Category;
use App\PostingSubscription;
use App\City;

class VacancyController extends Controller
{
	public function __construct()
	{
		return $this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies = Vacancy::where('user_id', auth()->user()->id)->get();

        return view('admin.vacancies.all-vacancies', compact('vacancies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $categories = Category::all();
        $cities = City::all();
        $job_types = JobType::all();
        $subscriptions = PostingSubscription::all();

        return view('admin.vacancies.new-vacancy', compact(
            'countries', 
            'categories',
            'cities',
            'job_types',
            'subscriptions'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancy $vacancy)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacancy $vacancy)
    {
    	$countries = Country::all();
        $countries = Country::all();
        $categories = Category::all();
        $cities = City::all();
        $job_types = JobType::all();
        $subscriptions = PostingSubscription::all();

        return view('admin.vacancies.edit-vacancy', compact(
            'countries', 
            'categories',
            'cities',
            'job_types',
            'subscriptions',
            'vacancy'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $attributes = $request->validate([
        'subscription' => 'required',
        'job_title' => ['required', 'min:3'],
        'category' => 'required',
        'country' => 'required',
        'city' => 'required',
        'job_type' => 'required',
        'salary' => 'required',
        'description' => 'required',
       ]);  

       Vacancy::create($attributes + ['user_id' => auth()->user()->id]);

       Alert::Success('Success!', 'Job vacancy added successfully')->position('top-right')->toToast();

       return redirect(route('admin.vacancies.index'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        $vacancy->update([
            'job_title' => $request->job_title,
            'category' => $request->category,
            'subscription' => $request->subscription,
            'job_title' => $request->job_title,
            'country' => $request->country,
            'city' => $request->city,
            'salary' => $request->salary,
            'description' => $request->description,
        ]);

        Alert::Success('Success!', 'Posting subscription updated successfully')->position('top-right')->toToast();

        return redirect(route('admin.postingsubscriptions.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancy $vacancy)
    {
       $vacancy->delete();

       Alert::Success('Success!', 'Vacancy deleted successfully')->position('top-right')->toToast();

       return redirect(route('admin.vacancies.index'));
   }
}
