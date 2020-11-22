@extends('layouts.backend-master')
@section('content')	

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Edit Interview Question</h4>
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
						<a href="{{route('admin.interviews.index')}}">Questions</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">{{$interview->question ?? ''}}</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Edit Question - {{$interview->question ?? ''}}</div>
						</div>
						<div class="card-body">
							<form method="Post" action="{{route('admin.interviews.update', $interview->id)}}">
								@csrf
								@method('PATCH')
								
								<div class="form-group">
									<label>Question</label>
									<input class="form-control" name="question" type="text" required value="{{$interview->question}}" />
								</div>
								<div class="form-group">
									<label>Category</label>
									<select class="form-control" name="category_id">
										<option value="{{$interview->category_id ?? ''}}">{{$interview->category->name ?? 'Select Category'}}</option>
										@foreach($categories as $category)
										<option value="{{$category->id}}">{{$category->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Sub Category</label>
									<select class="form-control" name="subcategory_id">
										<option value="{{$interview->subcategory_id ?? ''}}">{{$interview->subcategory->name ?? 'Select Sub Category'}}</option>
										@foreach($subcategories as $category)
										<option value="{{$category->id}}">{{$category->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Answer</label>
									<textarea class="form-control ckeditor" name="answer">{{$interview->answer}}</textarea>
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