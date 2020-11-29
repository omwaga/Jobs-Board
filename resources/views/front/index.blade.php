@extends('layouts.front')
@section('content')    
<div class="hero-wrap js-fullheight" style="background-image: url('front/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
			<div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
				<p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have <span class="number" data-number="850000">0</span> great job offers you deserve!</p>
				<h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1>

				@include('front.search-job')
			</div>
		</div>
	</div>
</div>

<section class="ftco-section services-section bg-light">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services d-block">
					<div class="icon"><span class="flaticon-resume"></span></div>
					<div class="media-body">
						<h3 class="heading mb-3">Search Millions of Jobs</h3>
						<p>Browse our job board on any device: Save interesting jobs and apply later</p>
					</div>
				</div>      
			</div>
			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services d-block">
					<div class="icon"><span class="flaticon-promotions"></span></div>
					<div class="media-body">
						<h3 class="heading mb-3">Get Personalised Job Recommendations</h3>
						<p>Registering with us gives you the benefit of browsing & applying variety of jobs based on your preferences</p>
					</div>
				</div>    
			</div>
			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services d-block">
					<div class="icon"><span class="flaticon-collaboration"></span></div>
					<div class="media-body">
						<h3 class="heading mb-3">Job Finder</h3>
						<p>Get the latest jobs matching your search by email: create your Job Finder.</p>
					</div>
				</div>      
			</div>
			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services d-block">
					<div class="icon"><span class="flaticon-employee"></span></div>
					<div class="media-body">
						<h3 class="heading mb-3">Let Employers Contact you directly</h3>
						<p>Let companies find you:create, complete and activate your applicant profile!.</p>
					</div>
				</div>      
			</div>
		</div>

			<div align="center">
					<a href="{{route('register')}}" class="btn btn-primary">Register Now</a>
					<p>Already have a recruitable account? <a href="{{route('register')}}">Login</a></p>
			</div>
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

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Recently Added Jobs</span>
				<h2 class="mb-4"><span>Recent</span> Jobs</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
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
									<div class="mr-3"><span class="icon-layers"></span> <a href="#">{{$vacancy->user->name ?? ''}}</a></div>
									<div><span class="icon-my_location"></span> <span>{{$vacancy->postcity->name ?? ''}}, {{$vacancy->postcountry->name ?? ''}}</span></div>
								</div>
							</div>

							<div class="ml-auto d-flex">
								<a href="{{route('front.singlejob', $vacancy->slug)}}" class="btn btn-primary py-2 mr-1">Apply Job</a>
								<a href="{{route('login')}}" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
									<span class="icon-heart"></span>
								</a>
							</div>
						</div>
					</div><!-- end -->
					@empty
					@endforelse
				</div>
				<div class="row mt-5">
					<div class="col text-center">
						{{$vacancies->links()}}
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="job-post-item">
					<div class="item p-4 bg-white">
						<div class="testimony-wrap py-4 pb-5">
							<h3>Get Personalised Jobs !!</h3>
							<div class="text">
								<p class="mb-3">Tell us what kind of a job you are looking out for and stay updated with latest opportunities.</p>
								<button class="btn btn-danger">Register for Free</button>
								<button class="btn btn-primary">Upload CV</button>
							</div>
						</div>
					</div>
					<div class="item p-4 mt-3 bg-white">
						<div class="testimony-wrap py-4 pb-5">
							<h4>Get best matched jobs directly in your mail.</h4>
							<div class="text">
								<p class="mb-3">Tell us what kind of a job you are looking out for and stay updated with latest opportunities.</p>
								<small>No registration required</small><br>	
								<button class="btn btn-primary">Create Job Alert</button>
							</div>
						</div>
					</div>
					<div class="item p-4 mt-3 bg-white">
						<div class="testimony-wrap py-4 pb-5">
							<h4>Services for Recruiters</h4>
							<div class="text">
								<ul class="mb-3" style="list-style: none">
									<li><span class="icon-check"></span> Recruitable Employer Zone</li>
									<small>End your hunt for the perfect employee</small>
									<li><span class="icon-check"></span> Search CVs for Free now</li>
									<small>Find the right candidate</small>
									<li><span class="icon-check"></span> Naukri Job Posting Services and Resume Database Access</li>
									<small>Call 1800-102-2558 for Employer products</small>
									<li><span class="icon-check"></span> Campus Hiring Solutions</li>
									<small>Optimize your Fresher Hiring</small>
									<li><span class="icon-check"></span> Naukri RMS</li>
									<small>Automate your end to end hiring process.</small>
								</ul>
								<button class="btn btn-primary">Get Started</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Our Blog</span>
				<h2><span>Recent</span> Articles</h2>
			</div>
		</div>
		<div class="row d-flex">
			@forelse($articles as $article)
			<div class="col-md-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="{{route('front.blog.article', $article->slug)}}" class="block-20" style="background-image: url('{{asset('storage/blog_articles/'.$article->cover_image)}}');">
					</a>
					<div class="text mt-3">
						<div class="meta mb-2">
							<div><a href="{{route('front.blog.article', $article->slug)}}">{{$article->updated_at->diffForHumans()}}</a></div>
							<div><a href="{{route('front.blog.article', $article->slug)}}">Recruitable Consulting</a></div>
							<div><a href="{{route('front.blog.article', $article->slug)}}" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
						</div>
						<h3 class="heading"><a href="{{route('front.blog.article', $article->slug)}}">{{$article->title ?? ''}}</a></h3>
						<p>{!! Str::limit(strip_tags($article->description), 100) !!} <a href="{{route('front.blog.article', $article->slug)}}">Read More</a></p>
					</div>
				</div>
			</div>
			@empty
			<p>Nothing Yet</p>
			@endforelse
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