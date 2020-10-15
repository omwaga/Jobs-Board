@extends('layouts.backend-master')
@section('content')
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Vacancy Management</h4>
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
						<a href="#">Vacancy Management</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">New Vacancy</h4>
						</div>
						<div class="card-body">
							<div class="form">
								<form method="Post" action="{{route('admin.vacancies.store')}}">
									@csrf
									<div class="form-group ">
										<label class="control-label">Job Title <span class="text-danger">*</span></label>
										<input class="form-control" name="job_title" type="text" required value="{{old('job_title')}}" />
									</div>

									<div class="row">
										<div class="col-lg-6">
											<label class="control-label">Job Category <span class="required">*</span></label>
											<select class="form-control m-bot15" name="category">
												<option value="">Select Category</option>
												@foreach($categories as $category)
												<option value="{{$category->id}}">{{$category->name}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-lg-6">
											<label class="control-label">Job Type <span class="required">*</span></label>
											<select class="form-control m-bot15" name="job_type">
												<option value="">Select Job Type</option>
												@foreach($job_types as $job_type)
												<option value="{{$job_type->id}}">{{$job_type->name}}</option>
												@endforeach
											</select>
										</div>

										<div class="col-lg-6">
											<label class="control-label">Country <span class="required">*</span></label>
											<select class="form-control m-bot15" name="country">
												<option value="">Select Country</option>
												@foreach($countries as $country)
												<option value="{{$country->id}}">{{$country->name}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-lg-6">
											<label class="control-label">City <span class="required">*</span></label>
											<select class="form-control m-bot15" name="city">
												<option value="">Select City</option>
												@foreach($cities as $city)
												<option value="{{$city->id}}">{{$city->name}}</option>
												@endforeach
											</select>
										</div>

										<div class="col-lg-6">
											<label class="control-label">Required Exerience <span class="required">*</span></label>
										<input class="form-control" name="required_experience" type="text" value="{{old('required_experience')}}" />
										</div>

										<div class="col-lg-6">
											<label class="control-label">Application Deadline <span class="required">*</span></label>
										<input class="form-control" name="application_deadline" type="text" value="{{old('application_deadline')}}" />
										</div>
										
										<div class="col-lg-6">
											<label class="control-label">Subscription <span class="required">*</span></label>
											<select class="form-control m-bot15" name="subscription">
												<option value="">Select Subscription</option>
												@foreach($subscriptions as $subscription)
												<option value="{{$subscription->id}}">{{$subscription->name}} - {{$subscription->description}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-lg-6">
											<label class="control-label">Salary <span class="required">*</span></label>
											<input class="form-control" name="salary" value="{{old('salary')}}" type="text" required/>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label">Description <span class="required">*</span></label>									
										<textarea class="form-control ckeditor" name="description" rows="10"></textarea>
									</div>
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<button class="btn btn-primary" type="submit">Save</button>
										</div>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection