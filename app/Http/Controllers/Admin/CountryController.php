<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Country;

class CountryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();

        return view('admin.countries', compact('countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create(Country $country)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('admin.edit-country', compact('country'));
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
            'name' => 'required|unique:countries|min:3',
            'code' => 'required'
        ]);

        // if ($attributes->fails()) {
        //     return back()->with('toast_error', $attributes->messages()->all()[0])->withInput();
        // }

        Country::create($attributes);

        Alert::Success('Success!', 'Country Added Successfully')->position('top-right')->toToast();

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3',
            'code' => 'required'
        ]);

        $country->update($attributes);

        Alert::Success('Success!', 'Country Updated Successfully')->position('top-right')->toToast();

        return redirect(route('admin.countries.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();

        Alert::Success('Success!', 'Country Deleted Successfully')->position('top-right')->toToast();

        return redirect(route('admin.countries.index'));
    }
}
