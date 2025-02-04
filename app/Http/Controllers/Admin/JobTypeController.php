<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\JobType;

class JobTypeController extends Controller
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
        $job_types = JobType::all();

        return view('backend.vacancies.job-types', compact('job_types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vacancies.create-jobtype');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(JobType $jobtype)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(JobType $jobtype)
    {
        return view('backend.vacancies.edit-job-type', compact('jobtype'));
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
        'name' => 'required|min:3|unique:job_types',
        'description' => 'nullable',
    ]);  

     $slug = Str::slug($request->name.'-jobs');

     JobType::create($attributes + ['slug' => $slug]);

     Alert::Success('Success!', 'Job type added successfully')->position('top-right')->toToast();

     return redirect(route('admin.jobtypes.index'));
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobType $jobtype)
    {
        $jobtype->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        Alert::Success('Success!', 'The job type updated successfully')->position('top-right')->toToast();

        return redirect(route('admin.jobtypes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobType $jobtype)
    {
     $jobtype->delete();

     Alert::Success('Success!', 'Job type deleted successfully')->position('top-right')->toToast();

     return redirect(route('admin.jobtypes.index'));
 }
}
