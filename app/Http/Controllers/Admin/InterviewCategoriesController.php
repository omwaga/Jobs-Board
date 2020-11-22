<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\InterviewCategories;

class InterviewCategoriesController extends Controller
{

	public function __construct()
	{
		return $this->middleware('auth');
	}

	public function index()
	{
		$categories = InterviewCategories::orderBy('created_at', 'DESC')->get();

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
			'cover_image' => 'nullable',
			'description' => 'nullable'
		]);

		if ($request->hasFile('cover_image')) {
			$attributes['cover_image'] = $request->cover_image->getClientOriginalName();
			$request->cover_image->storeAs('public/interview_categories', $attributes['cover_image']);
		}

		InterviewCategories::create($attributes);

		Alert::Success('Success!', 'Category added successfully')->position('top-right')->toToast();

		return redirect(route('admin.interviewCategories.index'));
	}

	public function edit(InterviewCategories $interviewCategory)
	{
		return view('backend.interviews.edit-category', compact('interviewCategory'));
	}

	public function update(InterviewCategories $interviewCategory, Request $request)
	{
		$interviewCategory->update(request(['name', 'description']));

		Alert::Success('Success!', 'Category updated successfully')->position('top-right')->toToast();

		return redirect(route('admin.interviewCategories.index'));
	}

	public function destroy(InterviewCategories $interviewCategory)
	{
		$interviewCategory->delete();

		Alert::Success('Success!', 'Category added successfully')->position('top-right')->toToast();

		return redirect(route('admin.interviewCategories.index'));
	}
}
