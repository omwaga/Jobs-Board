<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\CompanyType;

class CompanyTypeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_types = CompanyType::all();

        return view('backend.company-types', compact('company_types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create(CompanyType $company)
    {
        return view('backend.create-company-type');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyType $company)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyType $company)
    {
        return view('backend.edit-company-type', compact('company'));
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
        'name' => 'required|min:3|unique:company_types',
    ]);  

     CompanyType::create($attributes);

     Alert::Success('Success!', 'Company type added successfully')->position('top-right')->toToast();

     return redirect(route('admin.companies.index'));
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyType $company)
    {
        $company->update([
            'name' => $request->name,
        ]);

        Alert::Success('Success!', 'Company type updated successfully')->position('top-right')->toToast();

        return redirect(route('admin.companies.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyType $company)
    {
     $company->delete();

     Alert::Success('Success!', 'Company type deleted successfully')->position('top-right')->toToast();

     return back();
 }
}
