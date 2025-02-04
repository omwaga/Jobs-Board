<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\InterviewCategories;
use App\InterviewSubcategories;

use Illuminate\Http\Request;

class InterviewSubcategoriesController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
		$subcategories =  InterviewSubcategories::orderBy('created_at', 'DESC')->get();

		return view('backend.interviews.sub-categories', compact('subcategories'));
    }

	public function create()
	{
		$categories = InterviewCategories::all();

		return view('backend.interviews.create-subcategory', compact('categories'));
	}

	public function store(Request $request)
	{
		$attributes = $request->validate([
			'name' => 'required|min:3|unique:interview_categories',
			'cover_image' => 'nullable',
			'category_id' => 'required',
			'description' => 'nullable'
		]);

		if ($request->hasFile('cover_image')) {
			$attributes['cover_image'] = $request->cover_image->getClientOriginalName();
			$request->cover_image->storeAs('public/interview_sub_categories', $attributes['cover_image']);
		}

		InterviewSubcategories::create($attributes);

		Alert::Success('Success!', 'Sub category added successfully')->position('top-right')->toToast();

		return redirect(route('admin.subcategories.index'));
	}

	public function edit(InterviewSubcategories $subcategory)
	{
		$categories = InterviewCategories::all();

		return view('backend.interviews.edit-sub-category', compact('subcategory', 'categories'));
	}

	public function update(InterviewSubcategories $subcategory, Request $request)
	{
		$attributes = $request->validate([
			'name' => 'required|min:3',
			'cover_image' => 'nullable',
			'category_id' => 'required',
			'description' => 'nullable'
		]);

		if ($request->hasFile('cover_image')) {
			$attributes['cover_image'] = $request->cover_image->getClientOriginalName();
			$request->cover_image->storeAs('public/interview_sub_categories', $attributes['cover_image']);
		}
		$subcategory->update($attributes);

		Alert::Success('Success!', 'Sub category updated successfully')->position('top-right')->toToast();

		return redirect(route('admin.subcategories.index'));
	}

	public function destroy(InterviewSubcategories $subcategory)
	{
		$subcategory->delete();

		Alert::Success('Success!', 'Sub category deleted successfully')->position('top-right')->toToast();

		return redirect(route('admin.subcategories.index'));
	}
}
