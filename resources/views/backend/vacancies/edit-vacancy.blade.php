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
							<h4 class="card-title">Edit Vacancy - {{$vacancy->job_title}}</h4>
						</div>
						<div class="card-body">
							<div class="form">
								<form class="form-validate form-horizontal" method="Post" action="{{route('admin.vacancies.update', $vacancy->id)}}">
									@csrf
									@method('PATCH')
									<div class="form-group ">
										<label class="control-label">Job Title <span class="text-danger">*</span></label>
										<input class="form-control" name="job_title" type="text" required value="{{$vacancy->job_title}}" />
									</div>
									<div class="form-group ">
										<label class="control-label">Employer Name</label>
										<input class="form-control" name="employer_name" type="text" value="{{$vacancy->employer_name}}" />
									</div>

									<div class="row p-2">
										<div class="col-lg-6">
											<label class="control-label">Job Category <span class="required">*</span></label>
											<select class="form-control m-bot15" name="category">
												<option value="{{$vacancy->category}}">{{$vacancy->postcategory->name ?? 'Select Category'}}</option>
												@foreach($categories as $category)
												<option value="{{$category->id}}">{{$category->name}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-lg-6">
											<label class="control-label">Job Type <span class="required">*</span></label>
											<select class="form-control m-bot15" name="job_type">
												<option value="{{$vacancy->job_type}}">{{$vacancy->postjobtype->name ?? 'Select Job Type'}}</option>
												@foreach($job_types as $job_type)
												<option value="{{$job_type->id}}">{{$job_type->name}}</option>
												@endforeach
											</select>
										</div>

										<div class="col-lg-6">
											<label class="control-label">Country <span class="required">*</span></label>
											<select class="form-control m-bot15" name="country">
												<option value="{{$vacancy->country}}">{{$vacancy->postcountry->name ?? 'Select Country'}}</option>
												@foreach($countries as $country)
												<option value="{{$country->id}}">{{$country->name}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-lg-6">
											<label class="control-label">City <span class="required">*</span></label>
											<select class="form-control m-bot15" name="city">
												<option value="{{$vacancy->city}}">{{$vacancy->postcity->name ?? 'Select City'}}</option>
												@foreach($cities as $city)
												<option value="{{$city->id}}">{{$city->name}}</option>
												@endforeach
											</select>
										</div>

										<div class="col-lg-6">
											<label class="control-label">Required Exerience <span class="required">*</span></label>
										<input class="form-control" name="required_experience" type="text" value="{{$vacancy->required_experience}}" />
										</div>

										<div class="col-lg-6">
											<label class="control-label">Application Deadline <span class="required">*</span></label>
										<input class="form-control" name="application_deadline" type="text" value="{{$vacancy->application_deadline}}" />
										</div>

										<div class="col-lg-6">
											<label class="control-label">Subscription <span class="required">*</span></label>
											<select class="form-control m-bot15" name="subscription">
												<option value="{{$vacancy->subscription}}">{{$vacancy->postsubscription->name ?? 'Select Subscription'}}</option>
												@foreach($subscriptions as $subscription)
												<option value="{{$subscription->id}}">{{$subscription->name}} - {{$subscription->description}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-lg-6">
											<label class="control-label">Salary <span class="required">*</span></label>
											<input class="form-control" name="salary" value="{{$vacancy->salary}}" type="text" required/>
										</div>
									</div>

									<div class="form-group ">
										<label class="control-label">Description <span class="required">*</span></label>
										<div class="col-lg-12">										
											<textarea class="form-control ckeditor" name="description" rows="10">{{$vacancy->description}}</textarea>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label">Applications Details <span class="text-danger">*</span></label>	

										<div class="form-check">
											<label class="form-check-label">
												<input class="form-check-input" name="recruitable_apply" type="checkbox" checked="" value="No">
												<span class="form-check-sign">Check if you dont want to receive and manage applications on Recruitable System</span>
											</label>
										</div>								
										<textarea class="form-control ckeditor" name="how_to_apply" rows="10">{{$vacancy->how_to_apply}}</textarea>
									</div>
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<button class="btn btn-primary" type="submit">Update Vacancy</button>
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