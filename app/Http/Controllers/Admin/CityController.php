<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\City;
use App\Country;

class CityController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        $countries =  Country::all();

        return view('backend.cities', compact('cities', 'countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries =  Country::all();

        return view('backend.create-city', compact('countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $countries =  Country::all();

        return view('backend.edit-city', compact('city', 'countries'));
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
        'name' => 'required|unique:cities|min:3|unique:cities',
        'country_id' => 'required',
    ]); 

       City::create($attributes);

       Alert::Success('Success!', 'City Added Successfully')->position('top-right')->toToast();

       return redirect(route('admin.cities.index'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
       $attributes = $request->validate([
        'name' => 'required|min:3',
        'country_id' => 'required',
    ]);

       $city->update($attributes);

       Alert::Success('Success!', 'City Updated Successfully')->position('top-right')->toToast();

       return redirect(route('admin.cities.index'));
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();

        Alert::Success('Success!', 'City deleted successfully')->position('top-right')->toToast();

        return redirect(route('admin.cities.index'));
    }
}
