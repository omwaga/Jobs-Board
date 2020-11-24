<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\BlogPost;
use App\BlogCategory;
use App\BlogSubcategories;

class BlogPostController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

	public function index()
	{
		$articles =  BlogPost::orderBy('created_at', 'DESC')->get();

		return view('backend.blog.blog-posts', compact('articles'));
	}

	public function create()
	{
		$categories = BlogCategory::all();
		$subcategories = BlogSubcategories::all();

		return view('backend.blog.create-blog-article', compact('categories', 'subcategories'));
	}

	public function store(Request $request)
	{
		$attributes =  request()->validate([
			'title' => 'required|min:3|unique:blog_posts',
			'category_id' => 'required',
			'cover_image' => 'required',
			'description' => 'required|min:3',
			'subcategory_id' => 'nullable'
		]);

		if ($request->hasFile('cover_image')) {
			$attributes['cover_image'] = $request->cover_image->getClientOriginalName();
			$request->cover_image->storeAs('public/blog_articles', $attributes['cover_image']);
		}

		BlogPost::create($attributes);

		Alert::Success('Success!', 'Blog article added successfully')->position('top-right')->toToast();

		return redirect(route('admin.blogposts.index'));
	}
}
