@extends('layouts.backend-master')
@section('content')	

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">New Sub Category</h4>
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
						<a href="{{route('admin.interviewCategories.index')}}">Categories</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">New Sub Category</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">New Sub Category </div>
						</div>
						<div class="card-body">
							<form method="Post" action="{{route('admin.subcategories.store')}}">
								@csrf					
								
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" name="name" type="text" required value="{{old('name')}}" />
								</div>
								<div class="form-group">
									<label>Category</label>
									<select class="form-control" name="category_id">
										<option value="">Select Category</option>
										@foreach($categories as $category)
										<option value="{{$category->id}}">{{$category->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Cover Image</label>
									<input class="form-control" name="cover_image" type="file" value="{{old('cover_image')}}" />
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea class="form-control" name="description">{{old('description')}}</textarea>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button class="btn btn-primary" type="submit">Add</button>
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