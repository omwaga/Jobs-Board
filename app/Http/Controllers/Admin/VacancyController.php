<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Vacancy;
use App\Country;

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
    public function create(Vacancy $vacancy)
    {

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

        return view('admin.vacancies.edit-vacancy', compact('vacancy', 'countries'));
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
        'name' => 'required|min:3',
        'charges' => 'required',
        'description' => 'required',
    ]);  

    //    if ($attributes->fails()) {
    //     return back()->with('toast_error', $attributes->messages()->all()[0])->withInput()->position('top-right')->toToast();
    // }

       PostingSubscription::create($attributes);

       Alert::Success('Success!', 'Posting subsription added successfully')->position('top-right')->toToast();

       return back();
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostingSubscription $postingsubscription)
    {
        $postingsubscription->update([
            'name' => $request->name,
            'charges' => $request->charges,
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
    public function destroy(PostingSubscription $postingsubscription)
    {
       $postingsubscription->delete();

       Alert::Success('Success!', 'Posting subscription deleted successfully')->position('top-right')->toToast();

       return redirect(route('admin.postingsubscriptions.index'));
    }
}
