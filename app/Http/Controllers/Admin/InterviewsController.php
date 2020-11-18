<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Interviews;
use App\InterviewCategories;

class InterviewsController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

	public function index()
	{
		$questions =  Interviews::orderBy('created_at', 'DESC')->get();

		return view('backend.interviews.interview-questions', compact('questions'));
	}

	public function create()
	{
		$categories = InterviewCategories::all();

		return view('backend.interviews.create-interview-questions', compact('categories'));
	}

	public function store(Request $request)
	{
		$attributes =  request()->validate([
			'question' => 'required|min:3',
			'category_id' => 'required',
			'answer' => 'required|min:3'
		]);

		Interviews::create($attributes);

		Alert::Success('Success!', 'Interview Question added successfully')->position('top-right')->toToast();

		return redirect(route('admin.interviews.index'));
	}
}
