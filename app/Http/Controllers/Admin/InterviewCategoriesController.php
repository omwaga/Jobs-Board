<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\InterviewCategories;

class InterviewCategoriesController extends Controller
{
	public function index()
	{
		$categories = InterviewCategories::all();

		return view('backend.interviews.interview-categories', compact('categories'));
	}

	public function create()
	{
		return view('backend.interviews.create-category');
	}

	public function store(Request $request)
	{
		$attributes = $request->validate([
			'name' => 'required|min:3|unique:interview_categories',
			'description' => 'nullable'
		]);

		InterviewCategories::create($attributes);

		Alert::Success('Success!', 'Category added successfully')->position('top-right')->toToast();

		return redirect(route('admin.interviewCategories.index'));
	}
}
