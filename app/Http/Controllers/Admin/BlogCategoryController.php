<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\BlogCategory;

class BlogCategoryController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function  index()
    {
		$categories = BlogCategory::orderBy('created_at', 'DESC')->get();

		return view('backend.blog.blog-categories', compact('categories'));
    }

	public function create()
	{
		return view('backend.blog.create-category');
	}

	public function store(Request $request)
	{
		$attributes = $request->validate([
			'name' => 'required|min:3|unique:blog_categories',
			'cover_image' => 'nullable',
			'description' => 'nullable'
		]);

		if ($request->hasFile('cover_image')) {
			$attributes['cover_image'] = $request->cover_image->getClientOriginalName();
			$request->cover_image->storeAs('public/blog_categories', $attributes['cover_image']);
		}

		BlogCategory::create($attributes);

		Alert::Success('Success!', 'Category added successfully')->position('top-right')->toToast();

		return redirect(route('admin.blogcategories.index'));
	}
}
