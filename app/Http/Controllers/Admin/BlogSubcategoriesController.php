<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\BlogCategory;
use App\BlogSubcategories;

use Illuminate\Http\Request;

class BlogSubcategoriesController extends Controller
{    
	public function __construct()
	{
		return $this->middleware('auth');
	}

    public function index()
    {
		$subcategories =  BlogSubcategories::orderBy('created_at', 'DESC')->get();

		return view('backend.blog.blog-sub-categories', compact('subcategories'));
    }

	public function create()
	{
		$categories = BlogCategory::all();

		return view('backend.blog.create-subcategory', compact('categories'));
	}

	public function store(Request $request)
	{
		$attributes = $request->validate([
			'name' => 'required|min:3|unique:blog_subcategories',
			'cover_image' => 'nullable',
			'category_id' => 'required',
			'description' => 'nullable'
		]);

		if ($request->hasFile('cover_image')) {
			$attributes['cover_image'] = $request->cover_image->getClientOriginalName();
			$request->cover_image->storeAs('public/blog_sub_categories', $attributes['cover_image']);
		}

		BlogSubcategories::create($attributes);

		Alert::Success('Success!', 'Sub category added successfully')->position('top-right')->toToast();

		return redirect(route('admin.blogsubcategories.index'));
	}
}
