@extends('layouts.front')
@section('content')
<!-- HOME -->
<section class="home-section section-hero inner-page overlay bg-image" style="background-image: url('images/hero_1.jpg');"
id="home-section">

<div class="container">
	<div class="row align-items-center justify-content-center">
		<div class="col-md-12">
			<div class="mb-5 text-center">
				<h1 class="text-white font-weight-bold">Job Listings</h1>
				<p>Find your dream jobs in our powerful career website template.</p>
			</div>
		</div>
	</div>
</div>


</section>

<section class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<div class="row mb-5 justify-content-center">
					<div class="col-md-7 text-center">
						<h2 class="section-title mb-2">109,234 Job Listed</h2>
					</div>
				</div>


				<div class="mb-5">

					@foreach($vacancies as $vacancy)
					<div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
						<div class="col-md-2">
							<a href="{{route('front.singlejob', $vacancy->slug)}}"><img src="front/images/featured-listing-1.jpg" alt="Image" class="img-fluid"></a>
						</div>
						<div class="col-md-4">
							<span class="badge badge-secondary px-2 py-1 mb-3">{{$vacancy->postjobtype->name}}</span>
							<h2><a href="{{route('front.singlejob', $vacancy->slug)}}">{{$vacancy->job_title}}</a> </h2>
							<p class="meta">Publisher: <strong>{{$vacancy->user->name}}</strong> In: <strong>{{$vacancy->postcategory->name}}</strong></p>
						</div>
						<div class="col-md-3 text-left">
							<h3>{{$vacancy->postcity->name}}</h3>
							<span class="meta">{{$vacancy->postcountry->name}}</span>
						</div>
						<div class="col-md-3 text-md-right">
							<a href="{{route('front.singlejob', $vacancy->slug)}}" class="btn btn-primary">Apply</a>
						</div>
					</div>
					@endforeach

				</div>

				<div class="row pagination-wrap">

					<div class="col-md-6 text-center text-md-left">
						<div class="custom-pagination ml-auto">
							<a href="#" class="prev">Previous</a>
							<div class="d-inline-block">
								<a href="#" class="active">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
							</div>
							<a href="#" class="next">Next</a>
						</div>
					</div>
				</div>

			</div>
			<div class="col-md-4">
				@include('front.jobs-sidebar')
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