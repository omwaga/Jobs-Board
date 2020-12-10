@extends('layouts.front')
@section('content')

@include('front.banner')

<section class="ftco-section ftco-candidates ftco-candidates-2 bg-light">
<div class="container">
	<div class="row ">
		<div class="col-md-8">
			<section class="ftco-section ">
				<div class="container">
					<div class="row justify-content-center mb-1 pb-1	">
						<div class="col-md-7 heading-section text-center ftco-animate">
							<span class="subheading">Recently Added Jobs</span>
							<h3 class="mb-4">{{$vacancies->count() ?? '0'}} Jobs Found</h3>
						</div>
					</div>
					<div class="row">
						@forelse($vacancies as $vacancy)
						<div class="col-md-12 ftco-animate">

							<div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

								<div class="mb-4 mb-md-0 mr-5">
									<div class="job-post-item-header d-flex align-items-center">
										<a href="{{route('front.singlejob', $vacancy->slug)}}"><h2 class="mr-3 text-black h3">{{$vacancy->job_title ?? ''}}</h2></a>
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
										<div class="mr-3"><span class="icon-layers"></span> <a href="#">{{$vacancy->employer_name ?? $vacancy->user->name}}</a></div>
										<div><span class="icon-my_location"></span> <span>{{$vacancy->postcity->name ?? ''}}, {{$vacancy->postcountry->name ?? ''}}</span></div>
									</div>
								</div>

								<div class="ml-auto d-flex">
									<a href="{{route('front.singlejob', $vacancy->slug)}}" class="btn btn-primary py-2 mr-1">Apply Job</a>
									<a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
										<span class="icon-heart"></span>
									</a>
								</div>
							</div>
						</div><!-- end -->
						@empty
						@endforelse
					</div>
					
					{{$vacancies->links()}}
					
				</div>
			</section>

			<section class="ftco-section ftco-counter">
				<div class="container">
					<div class="row justify-content-center mb-5 pb-3">
						<div class="col-md-7 heading-section text-center ftco-animate">
							<span class="subheading">Find an opportunity anywhere</span>
							<h2 class="mb-4"><span>Trending</span> Job Categories</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 ftco-animate">
							<ul class="category">
								@foreach($top_categories1 as $category)
								<li><a href="{{route('front.category', $category->slug)}}">{{$category->name}}<span class="number" data-number="10">0</span></a></li>
								@endforeach
							</ul>
						</div>
						<div class="col-md-3 ftco-animate">
							<ul class="category">
								@foreach($top_categories2 as $category)
								<li><a href="{{route('front.category', $category->slug)}}">{{$category->name}}<span class="number" data-number="10">0</span></a></li>
								@endforeach
							</ul>
						</div>
						<div class="col-md-3 ftco-animate">
							<ul class="category">
								@foreach($top_categories3 as $category)
								<li><a href="{{route('front.category', $category->slug)}}">{{$category->name}}<span class="number" data-number="10">0</span></a></li>
								@endforeach
							</ul>
						</div>
						<div class="col-md-3 ftco-animate">
							<ul class="category">
								@foreach($top_categories4 as $category)
								<li><a href="{{route('front.category', $category->slug)}}">{{$category->name}}<span class="number" data-number="{{$category->jobs->count()}}">0</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="col-md-4">			
				@include('front.jobs-sidebar')
		</div>
	</div>
</div>
</section>

<section class="py-5 bg-image fixed overlay" style="background-image: url('{{asset('front/images/bg_1.jpg')}}');">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-8">
				<h2 class="text-white">Looking For A Job?</h2>
				<p class="mb-0 text-white lead">
					The Recruitable portal offers thousands of job offers in many industries, it also deals with job placement and training organization. 
				</p>
			</div>
			<div class="col-md-3 ml-auto">
				<a href="{{route('register')}}" class="btn btn-warning btn-block btn-lg">Sign Up</a>
			</div>
		</div>
	</div>
</section>
@endsection