<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Category;
use App\City;
use App\JobType;
use App\UserLevel;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $level = UserLevel::where('user_id', auth()->user()->id)->pluck('level');

        return view('backend.jobseeker.dashboard', compact('level'));
    }

    public function levelSelection()
    {
        return view('backend.jobseeker.level-selection');
    }

    public function fresherProfile()
    {
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        return view('backend.jobseeker.fresher-profile', compact('categories', 'locations', 'job_types'));
    }

    public function professionalProfile()
    {
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        return view('backend.jobseeker.professional-profile', compact('categories', 'locations', 'job_types'));
    }

    public function updateUser(Request $request, $id)
    {
        $attributes = request()->validate([
            'profile_picture' => 'nullable',
            'designation' => 'nullable|min:3',
            'show_profile' => 'nullable',
            'name' => 'required|min:3',
            'about' => 'nullable|min:3',
        ]);

        $user = User::findOrFail($id);        

        if ($request->hasFile('profile_picture')) {
            $attributes['profile_picture'] = $request->profile_picture->getClientOriginalName();
            $request->profile_picture->storeAs('public/user_profiles', $attributes['profile_picture']);
        }

        $user->update($attributes);

        Alert::Success('Success!', 'Profile details updated successfully')->position('top-right')->toToast();

        return back();
    }
}
