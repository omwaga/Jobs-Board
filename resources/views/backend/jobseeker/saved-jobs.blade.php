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
									<a href="{{route('jobseeker.singlejob', $vacancy->job->slug)}}"><h2 class="mr-3 text-black h3">{{$vacancy->job->job_title ?? ''}}</h2></a>
									
								</div>
							</div>

							<div class="ml-auto d-flex">
								<a href="{{route('jobseeker.singlejob', $vacancy->job->slug)}}" class="btn btn-primary py-2 mr-1">Apply Job</a>

								<form method="POST" action="{{route('jobseeker.savedjobs.destroy', $vacancy->id)}}">
									@csrf
									@method('DELETE')
									<input type="hidden" name="vacancy_id" value="{{$vacancy->job->id}}">
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