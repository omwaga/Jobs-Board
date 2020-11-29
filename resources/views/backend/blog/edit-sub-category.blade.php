@extends('layouts.backend-master')
@section('content')	

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Edit Sub Category</h4>
				<ul class="breadcrumbs">
					<li class="nav-home">
						<a href="{{route('admin.dashboard')}}">
							<i class="flaticon-home"></i>
						</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="{{route('admin.dashboard')}}">Dashboard</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="{{route('admin.blogsubcategories.index')}}">Sub Categories</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">Edit Sub Category</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Edit Sub Category - {{$blogsubcategory->name}}</div>
						</div>
						<div class="card-body">
							<form method="Post" action="{{route('admin.blogsubcategories.update', $blogsubcategory->id)}}" enctype="multipart/form-data">
								@csrf
								@method('PATCH')					
								
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" name="name" type="text" required value="{{$blogsubcategory->name}}" />
								</div>
								<div class="form-group">
									<label>Category</label>
									<select class="form-control" name="category_id">
										<option value="{{$blogsubcategory->category_id ?? ''}}">{{$blogsubcategory->category->name ?? 'Select Category'}}</option>
										@foreach($categories as $category)
										<option value="{{$category->id}}">{{$category->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Cover Image</label>
									<input class="form-control" name="cover_image" type="file" value="{{$blogsubcategory->cover_image}}" />
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea class="form-control" name="description">{{$blogsubcategory->description}}</textarea>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button class="btn btn-primary" type="submit">Update</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection