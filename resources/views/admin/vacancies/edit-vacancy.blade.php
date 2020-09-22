@extends('layouts.admin-master')
@section('content')	
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-files-o"></i> Edit Vacancy</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
					<li><i class="icon_document_alt"></i><a href="{{route('admin.vacancies.index')}}">Vacancy Management</a> </li>
					<li><i class="fa fa-files-o"></i> Edit Vacancy</li>
				</ol>
			</div>
		</div>
		<!-- Form validations -->
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						Edit Vacancy - {{$vacancy->job_title}}
					</header>
					<div class="panel-body">
						<div class="form">
							<form class="form-validate form-horizontal" method="Post" action="{{route('admin.vacancies.update', $vacancy->id)}}">
								@csrf
								@method('PATCH')
								<div class="form-group ">
									<label class="control-label col-lg-2">Job Title <span class="required">*</span></label>
									<div class="col-lg-10">
										<input class="form-control" name="job_title" type="text" required value="{{$vacancy->job_title}}" />
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-lg-2">Job Category <span class="required">*</span></label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-lg-5">
												<select class="form-control m-bot15" name="category">
													<option value="{{$vacancy->country_id}}">{{$vacancy->postcountry->name ?? 'Select Country'}}</option>
													@foreach($countries as $country)
													<option value="{{$country->id}}">{{$country->name}}</option>
													@endforeach
												</select>
											</div>
											<label class="control-label col-lg-2">Job Type <span class="required">*</span></label>
											<div class="col-lg-5">
												<select class="form-control m-bot15" name="job_type">
													<option value="{{$vacancy->country_id}}">{{$vacancy->postcountry->name ?? 'Select Country'}}</option>
													@foreach($countries as $country)
													<option value="{{$country->id}}">{{$country->name}}</option>
													@endforeach
												</select>
											</div>
										</div>

									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-lg-2">Country <span class="required">*</span></label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-lg-5">
												<select class="form-control m-bot15" name="country">
													<option value="{{$vacancy->country_id}}">{{$vacancy->postcountry->name ?? 'Select Country'}}</option>
													@foreach($countries as $country)
													<option value="{{$country->id}}">{{$country->name}}</option>
													@endforeach
												</select>
											</div>
											<label class="control-label col-lg-2">City <span class="required">*</span></label>
											<div class="col-lg-5">
												<select class="form-control m-bot15" name="city">
													<option value="{{$vacancy->country_id}}">{{$vacancy->postcountry->name ?? 'Select Country'}}</option>
													@foreach($cities as $city)
													<option value="{{$city->id}}">{{$city->name}}</option>
													@endforeach
												</select>
											</div>
										</div>

									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-lg-2">Subscription <span class="required">*</span></label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-lg-5">
												<select class="form-control m-bot15" name="subscription">
													<option value="{{$vacancy->subscription}}">{{$vacancy->subscription->name ?? 'Select Subscription'}}</option>
													@foreach($subscriptions as $subscription)
													<option value="{{$subscription->id}}">{{$subscription->name}} - {{$subscription->description}}</option>
													@endforeach
												</select>
											</div>
											<label class="control-label col-lg-2">Salary <span class="required">*</span></label>
											<div class="col-lg-5">
												<input class="form-control" name="salary" value="{{$vacancy->salary}}" type="text" required value="" />
											</div>
										</div>

									</div>
								</div>
								<div class="form-group ">
									<label class="control-label col-lg-2">Description <span class="required">*</span></label>
									<div class="col-lg-10">										
										<textarea class="form-control ckeditor" name="description" rows="10">{{$vacancy->description}}</textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button class="btn btn-primary" type="submit">Save</button>
									</div>
								</div>
							</form>
						</div>

					</div>
				</section>
			</div>
		</div>
		<!-- page end-->
	</section>
	@endsection