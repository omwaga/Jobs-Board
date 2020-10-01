<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function levelSelection()
    {
        return view('backend.jobseeker.level-selection');
    }

    public function fresherProfile()
    {
        return view('backend.jobseeker.fresher-profile');
    }
}
