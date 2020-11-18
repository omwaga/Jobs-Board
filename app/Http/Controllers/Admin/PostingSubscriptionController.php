<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\PostingSubscription;

class PostingSubscriptionController extends Controller
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
        $posting_subscriptions = PostingSubscription::all();

        return view('backend.vacancies.posting-subscriptions', compact('posting_subscriptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vacancies.create-posting-subscription');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(PostingSubscription $postingsubscription)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(PostingSubscription $postingsubscription)
    {
        return view('backend.vacancies.edit-posting-subsription', compact('postingsubscription'));
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
        'name' => 'required|min:3|unique:posting_subscriptions',
        'charges' => 'required',
        'description' => 'required',
    ]);  

       PostingSubscription::create($attributes);

       Alert::Success('Success!', 'Posting subsription added successfully')->position('top-right')->toToast();

       return redirect(route('admin.postingsubscriptions.index'));
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
