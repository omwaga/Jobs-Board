<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\JobType;

class JobTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_types = JobType::all();

        return view('admin.vacancies.job-types', compact('job_types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create(JobType $jobtype)
    {

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
        return view('admin.vacancies.edit-job-type', compact('jobtype'));
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
    ]);  

    //    if ($attributes->fails()) {
    //     return back()->with('toast_error', $attributes->messages()->all()[0])->withInput()->position('top-right')->toToast();
    // }

       JobType::create($attributes);

       Alert::Success('Success!', 'Job type added successfully')->position('top-right')->toToast();

       return back();
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
