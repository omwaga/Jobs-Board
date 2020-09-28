@extends('layouts.backend-master')
@section('content')
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Job Listings</h4>
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
						<a href="#">Job Listings</a>
					</li>
				</ul>
			</div>

			<div class="row mb-5 justify-content-center">
				<div class="col-md-7 text-center">
					<h2 class="section-title mb-2">109,234 Job Listed</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					@foreach($vacancies as $vacancy)
					<div class="card p-3">	
						<div class="d-flex align-items-center">
							<div class="border p-2 d-inline-block mr-3 rounded">
								<img src="{{asset('front/images/featured-listing-1.jpg')}}" alt="Free Website Template By Free-Template.co">
							</div>
							<div>
								<h2>{{$vacancy->job_title ?? ''}}</h2>
								<div>
									<span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{$vacancy->user->name ?? ''}}</span>
									<span class="m-2"><span class="icon-room mr-2"></span>{{$vacancy->postcity->name ?? ''}}, {{$vacancy->postcountry->name ?? ''}}</span>
									<span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">{{$vacancy->postjobtype->name ?? ''}}</span></span>
								</div>
							</div>
						</div>
						<div>
						<div class="btn-group pull-right">
							<a href="#" class="btn btn-secondary btn-md">
								<i class="fas fa-heart"></i> Save</a>
							<a href="{{route('jobseeker.singlejob', $vacancy->slug)}}" class="btn btn-primary">Apply</a>
						</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="col-md-4">
					@include('backend.jobseeker.jobs-sidebar')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection