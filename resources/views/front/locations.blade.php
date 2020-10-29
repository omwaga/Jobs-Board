@extends('layouts.front')
@section('content')

@include('front.banner')

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="ftco-search">
					<div class="row">
						<div class="col-md-12 nav-link-wrap">
							<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job/Internship</a>
							</div>
						</div>
						<div class="col-md-12 tab-wrap">

							<div class="tab-content p-4" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
									<form action="#" class="search-job">
										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="icon"><span class="icon-briefcase"></span></div>
														<input type="text" class="form-control" placeholder="eg. Garphic. Web Developer">
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="select-wrap">
															<div class="icon"><span class="ion-ios-arrow-down"></span></div>
															<select name="" id="" class="form-control">
																<option value="">All Categories</option>
																@foreach($categories as $category)
																<option value="{{$category->id}}">{{$category->name}}</option>
																@endforeach
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="select-wrap">
															<div class="icon"><span class="ion-ios-arrow-down"></span></div>
															<select name="" id="" class="form-control">
																<option value="">All Job Types</option>
																@foreach($job_types as $type)
																<option value="{{$type->id}}">{{$type->name}}</option>
																@endforeach
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="select-wrap">
															<div class="icon"><span class="icon-map-marker"></span></div>
															<select name="" id="" class="form-control">
																<option value="">All Locations</option>
																@foreach($locations as $location)
																<option value="{{$location->id}}">{{$location->name}}</option>
																@endforeach
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<input type="submit" value="Search" class="form-control btn btn-primary">
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row pt-3">

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