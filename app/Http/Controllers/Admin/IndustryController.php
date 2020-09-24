<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Industry;

class IndustryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industries  = Industry::all();

        return view('backend.vacancies.industries', compact('industries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('backend.vacancies.create-industry');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Industry $industry)
    {        
        return view('backend.vacancies.edit-industry', compact('industry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Industry $industry)
    {

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
        'name' => 'required|min:3|unique:industries',
        'description' => 'nullable',
    ]);  

     Industry::create($attributes);


     Alert::Success('Success!', 'Industry Added Successfully')->position('top-right')->toToast();

     return redirect(route('admin.industries.index'));
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Industry $industry)
    {
        $industry->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        Alert::Success('Success!', 'Industry updated successfully')->position('top-right')->toToast();

        return redirect(route('admin.industries.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Industry $industry)
    {
     $industry->delete();

     Alert::Success('Success!', 'Industry Deleted Successfully')->position('top-right')->toToast();

     return redirect(route('admin.industries.index'));
 }
}
