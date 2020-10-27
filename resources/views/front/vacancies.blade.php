@extends('layouts.front')
@section('content')

@include('front.banner')


<section class="ftco-section ftco-counter">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Categories work wating for you</span>
				<h2 class="mb-4"><span>Current</span> Job Posts</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 ftco-animate">
				<ul class="category">
					<li><a href="#">Web Development <span class="number" data-number="1000">0</span></a></li>
					<li><a href="#">Graphic Designer <span class="number" data-number="1000">0</span></a></li>
					<li><a href="#">Multimedia <span class="number" data-number="2000">0</span></a></li>
					<li><a href="#">Advertising <span class="number" data-number="900">0</span></a></li>
				</ul>
			</div>
			<div class="col-md-3 ftco-animate">
				<ul class="category">
					<li><a href="#">Education &amp; Training <span class="number" data-number="3500">0</span></a></li>
					<li><a href="#">English <span class="number" data-number="1560">0</span></a></li>
					<li><a href="#">Social Media <span class="number" data-number="1000">0</span></a></li>
					<li><a href="#">Writing <span class="number" data-number="2500">0</span></a></li>
				</ul>
			</div>
			<div class="col-md-3 ftco-animate">
				<ul class="category">
					<li><a href="#">PHP Programming <span class="number" data-number="5500">0</span></a></li>
					<li><a href="#">Project Management <span class="number" data-number="2000">0</span></a></li>
					<li><a href="#">Finance Management <span class="number" data-number="800">0</span></a></li>
					<li><a href="#">Office &amp; Admin <span class="number" data-number="7000">0</span></a></li>
				</ul>
			</div>
			<div class="col-md-3 ftco-animate">
				<ul class="category">
					<li><a href="#">Web Designer <span><span class="number" data-number="8000">0</span></span></a></li>
					<li><a href="#">Customer Service <span class="number" data-number="4000">0</span></a></li>
					<li><a href="#">Marketing &amp; Sales <span class="number" data-number="3300">0</span></a></li>
					<li><a href="#">Software Development <span class="number" data-number="1356">0</span></a></li>
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
			@forelse($vacancies as $vacancy)
			<div class="col-md-12 ftco-animate">

				<div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

					<div class="mb-4 mb-md-0 mr-5">
						<div class="job-post-item-header d-flex align-items-center">
							<h2 class="mr-3 text-black h3">{{$vacancy->job_title ?? ''}}</h2>
							<div class="badge-wrap">
								<span class="bg-primary text-white badge py-2 px-3">{{$vacancy->postjobtype->name ?? ''}}</span>
							</div>
						</div>
						<div class="job-post-item-body d-block d-md-flex">
							<div class="mr-3"><span class="icon-layers"></span> <a href="#">{{$vacancy->user->name ?? ''}}</a></div>
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
		<div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
					<ul>
						<li><a href="#">&lt;</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="site-section py-4 mb-5 border-top">
	<div class="container">

		<div class="row align-items-center">
			<div class="col-12 text-center mt-4 mb-5">
				<div class="row justify-content-center">
					<div class="col-md-7">
						<h2 class="section-title mb-2">Our Candidates Work In Company</h2>
						<p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit
						mollitia ipsum facilis expedita tempora suscipit iste</p>
					</div>
				</div>

			</div>
			<div class="col-6 col-lg-3 col-md-6 text-center">
				<img src="images/logo_mailchimp.svg" alt="Image" class="img-fluid logo-1">
			</div>
			<div class="col-6 col-lg-3 col-md-6 text-center">
				<img src="images/logo_paypal.svg" alt="Image" class="img-fluid logo-2">
			</div>
			<div class="col-6 col-lg-3 col-md-6 text-center">
				<img src="images/logo_stripe.svg" alt="Image" class="img-fluid logo-3">
			</div>
			<div class="col-6 col-lg-3 col-md-6 text-center">
				<img src="images/logo_visa.svg" alt="Image" class="img-fluid logo-4">
			</div>
		</div>
	</div>
</section>


<section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-8">
				<h2 class="text-white">Looking For A Job?</h2>
				<p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci
				impedit.</p>
			</div>
			<div class="col-md-3 ml-auto">
				<a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
			</div>
		</div>
	</div>
</section>
@endsection