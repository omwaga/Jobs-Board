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
					<h2 class="section-title mb-2">Recently Added Jobs</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					@foreach($vacancies as $vacancy)
					<div class="col-md-12 ftco-animate p-3">

						<div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

							<div class="mb-4 mb-md-0 mr-5">
								<div class="job-post-item-header d-flex align-items-center">
									<a href="{{route('jobseeker.singlejob', $vacancy->slug)}}" class="text-muted"><h2 class="mr-3 h2">{{$vacancy->job_title ?? ''}}</h2></a>
									<div class="badge-wrap">
										@if($vacancy->postjobtype->name === 'Full Time')
										<span class="bg-warning text-white badge py-2 px-3">{{$vacancy->postjobtype->name ?? ''}}</span>
										@elseif($vacancy->postjobtype->name === 'Part Time')
										<span class="bg-primary text-white badge py-2 px-3">{{$vacancy->postjobtype->name ?? ''}}</span>
										@elseif($vacancy->postjobtype->name === 'Internship')
										<span class="bg-secondary text-white badge py-2 px-3">{{$vacancy->postjobtype->name ?? ''}}</span>
										@elseif($vacancy->postjobtype->name === 'Freelance')
										<span class="bg-info text-white badge py-2 px-3">{{$vacancy->postjobtype->name ?? ''}}</span>
										@elseif($vacancy->postjobtype->name === 'Temporary')
										<span class="bg-danger text-white badge py-2 px-3">{{$vacancy->postjobtype->name ?? ''}}</span>
										@endif
									</div>
								</div>
								<div class="job-post-item-body d-block d-md-flex">
									<div class="mr-3"><span class="icon-layers"></span> <a href="#">{{$vacancy->user->name ?? ''}}</a></div>
									<div><span class="icon-my_location"></span> <span>{{$vacancy->postcity->name ?? ''}}, {{$vacancy->postcountry->name ?? ''}}</span></div>
								</div>
							</div>

							<div class="ml-auto d-flex">
								<a href="{{route('jobseeker.singlejob', $vacancy->slug)}}" class="btn btn-primary py-2 mr-1">Apply Job</a>

								<form method="POST" action="{{route('jobseeker.savedjobs.store')}}">
									@csrf
									<input type="hidden" name="vacancy_id" value="{{$vacancy->id}}">
									<button type="submit" class="btn btn-secondary rounded-circle d-flex align-items-center">
										<span class="fas fa-heart"></span>
									</button>
								</form>
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