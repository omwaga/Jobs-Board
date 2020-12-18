<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Certification;

class CertificationController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function index()
    {
        $certifications = Certification::where('user_id', auth()->user()->id)->get();
        return $certifications;
    }

    public function store(Request $request)
    {
    	$attributes = $request->validate([
    		'certification_name' => ['required', 'min:3'],
    		'start_date' => 'required',
    		'end_date' => 'nullable',
    		'current_certification' => 'nullable',
    	]);

		Certification::create($attributes + ['user_id' => auth()->user()->id]);
    }

    public function destroy(Certification $certification)
    {
        $certification->delete();
    }
}
