@extends('layouts.backend-master')
@section('content')
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">{{$page_banner->name ?? 'Search Vacancies and Jobs in Kenya'}}</h4>
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
						<a href="#">{{$page_banner->name ?? $page_banner->job_title ?? 'Search Vacancies and Jobs in Kenya'}}</a>
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
					<div class="card card-post card-round">
						<div class="card-body">
							<div class="d-flex">
								<div class="avatar">
									<img src="{{asset('front/images/logo.png')}}" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-post ml-2">
									<a href="{{route('jobseeker.singlejob', $vacancy->slug)}}"><h3 class="card-title">{{$vacancy->job_title ?? ''}}</h3></a>
									<p class="date text-muted"><span class="fas fa-building"></span>{{$vacancy->user->name ?? ''}}     <span class="fas fa-map-marker"></span> {{$vacancy->postcity->name ?? ''}}, {{$vacancy->postcountry->name ?? ''}}</p>
									</div>
									<div class="info-post ml-2">
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
								<div class="separator-solid"></div>
								<p class="card-text">{!! Str::limit(strip_tags($vacancy->description), 400) !!}</p>
								<div class="row pl-3">
								<a href="{{route('jobseeker.singlejob', $vacancy->slug)}}" class="btn btn-primary btn-rounded btn-sm mr-3">Apply Job</a>

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