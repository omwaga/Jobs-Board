<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Str;
use App\Category;

class CategoryController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('backend.vacancies.categories', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vacancies.create-category');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.vacancies.edit-category', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $attributes = $request->validate([
        'name' => 'required|min:3|unique:categories',
        'description' => 'nullable'
    ]);  

     $slug = Str::slug($request->name.'-jobs');

     Category::create($attributes + ['slug' => $slug]);

     Alert::Success('Success!', 'Category Added Successfully')->position('top-right')->toToast();

     return redirect(route('admin.categories.index'));
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        Alert::Success('Success!', 'Category Updated Successfully')->position('top-right')->toToast();

        return redirect(route('admin.categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
     $category->delete();

     Alert::Success('Success!', 'Category Deleted Successfully')->position('top-right')->toToast();

     return redirect(route('admin.categories.index'));
 }
}
