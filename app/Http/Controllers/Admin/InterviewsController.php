<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Interviews;
use App\InterviewCategories;
use App\InterviewSubcategories;

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
		$subcategories = InterviewSubcategories::all();

		return view('backend.interviews.create-interview-questions', compact('categories', 'subcategories'));
	}

	public function store(Request $request)
	{
		$attributes =  request()->validate([
			'question' => 'required|min:3',
			'category_id' => 'required',
			'answer' => 'required|min:3',
			'subcategory_id' => 'nullable'
		]);

		Interviews::create($attributes);

		Alert::Success('Success!', 'Interview Question added successfully')->position('top-right')->toToast();

		return redirect(route('admin.interviews.index'));
	}

	public function edit(Interviews $interview)
	{
		$categories = InterviewCategories::all();
		$subcategories = InterviewSubcategories::all();

		return view('backend.interviews.edit-interview-questions', compact('interview', 'categories',  'subcategories'));
	}

	public function update(Interviews $interview, Request $request)
	{
		$attributes = request()->validate([
			'question' => 'required|min:3',
			'category_id' => 'required',
			'answer' => 'required|min:3'
		]);

		$interview->update(request(['question', 'category_id', 'answer', 'subcategory_id']));

		Alert::Success('Success!', 'Interview Question updated successfully')->position('top-right')->toToast();

		return redirect(route('admin.interviews.index'));
	}

	public function destroy(Interviews $interview)
	{
		$interview->delete();

		Alert::Success('Success!', 'Interview Question deleted successfully')->position('top-right')->toToast();

		return redirect(route('admin.interviews.index'));		
	}
}
