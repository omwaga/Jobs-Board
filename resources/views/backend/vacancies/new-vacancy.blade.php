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
							<p>All fields marked <span class="text-danger">*</span> are required</p>
							<div class="form">
								<form method="Post" action="{{route('admin.vacancies.store')}}">
									@csrf
									<div class="form-group ">
										<label class="control-label">Job Title <span class="text-danger">*</span></label>
										<input class="form-control" name="job_title" type="text" required value="{{old('job_title')}}" />
									</div>
									<div class="form-group ">
										<label class="control-label">Employer Name</label>
										<input class="form-control" name="employer_name" type="text" value="{{old('employer_name')}}" />
									</div>

									<div class="row p-3">
										<div class="col-lg-6">
											<label class="control-label">Job Category <span class="text-danger">*</span></label>
											<select class="form-control m-bot15" name="category">
												<option value="">Select Category</option>
												@foreach($categories as $category)
												<option value="{{$category->id}}">{{$category->name}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-lg-6">
											<label class="control-label">Job Type <span class="text-danger">*</span></label>
											<select class="form-control m-bot15" name="job_type">
												<option value="">Select Job Type</option>
												@foreach($job_types as $job_type)
												<option value="{{$job_type->id}}">{{$job_type->name}}</option>
												@endforeach
											</select>
										</div>

										<div class="col-lg-6">
											<label class="control-label">Country <span class="text-danger">*</span></label>
											<select class="form-control m-bot15" name="country">
												<option value="">Select Country</option>
												@foreach($countries as $country)
												<option value="{{$country->id}}">{{$country->name}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-lg-6">
											<label class="control-label">City <span class="text-danger">*</span></label>
											<select class="form-control m-bot15" name="city">
												<option value="">Select City</option>
												@foreach($cities as $city)
												<option value="{{$city->id}}">{{$city->name}}</option>
												@endforeach
											</select>
										</div>

										<div class="col-lg-6">
											<label class="control-label">Required Experience</label>
											<input class="form-control" name="required_experience" type="text" value="{{old('required_experience')}}" />
										</div>

										<div class="col-lg-6">
											<label class="control-label">Application Deadline</label>
											<input class="form-control" name="application_deadline" type="text" value="{{old('application_deadline')}}" />
										</div>
										
										<div class="col-lg-6">
											<label class="control-label">Subscription <span class="text-danger">*</span></label>
											<select class="form-control m-bot15" name="subscription">
												<option value="">Select Subscription</option>
												@foreach($subscriptions as $subscription)
												<option value="{{$subscription->id}}">{{$subscription->name}} - {{$subscription->description}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-lg-6">
											<label class="control-label">Salary</label>
											<input class="form-control" name="salary" value="{{old('salary')}}" type="text"/>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label">Description <span class="text-danger">*</span></label>									
										<textarea class="form-control ckeditor" name="description" rows="10">{{old('description')}}</textarea>
									</div>
									<div class="form-group ">
										<label class="control-label">Applications Details <span class="text-danger">*</span></label>	

										<div class="form-check">
											<label class="form-check-label">
												<input class="form-check-input" name="recruitable_apply" type="checkbox" value="No">
												<span class="form-check-sign">Check if you dont want to receive and manage applications on Recruitable System</span>
											</label>
										</div>								
										<textarea class="form-control ckeditor" name="how_to_apply" rows="10">{{old('how_to_apply')}}</textarea>
									</div>
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<button class="btn btn-primary" type="submit">Post Job</button>
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