@extends('layouts.front')
@section('content')    
<div class="hero-wrap js-fullheight" style="background-image: url('front/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
			<div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
				<p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have <span class="number" data-number="850000">0</span> great job offers you deserve!</p>
				<h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1>

				<div class="ftco-search">
					<div class="row">
						<div class="col-md-12 nav-link-wrap">
							<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job/Internship</a>

								<a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Find a Candidate</a>

							</div>
						</div>
						<div class="col-md-12 tab-wrap">

							<div class="tab-content p-4" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
									<form action="{{route('front.jobseeker.search')}}" class="search-job" method="GET">
										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="icon"><span class="icon-briefcase"></span></div>
														<input type="text" name="search" class="form-control" placeholder="eg. Garphic. Web Developer">
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="select-wrap">
															<div class="icon"><span class="ion-ios-arrow-down"></span></div>
															<select name="category" id="" class="form-control">
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
															<select name="job_type" id="" class="form-control">
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
															<select name="location" id="" class="form-control">
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

								<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-performance-tab">
									<form action="#" class="search-job">
										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="icon"><span class="icon-user"></span></div>
														<input type="text" class="form-control" placeholder="eg. Adam Scott">
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="select-wrap">
															<div class="icon"><span class="ion-ios-arrow-down"></span></div>
															<select name="" id="" class="form-control">
																<option value="">Category</option>
																<option value="">Full Time</option>
																<option value="">Part Time</option>
																<option value="">Freelance</option>
																<option value="">Internship</option>
																<option value="">Temporary</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md">
												<div class="form-group">
													<div class="form-field">
														<div class="icon"><span class="icon-map-marker"></span></div>
														<input type="text" class="form-control" placeholder="Location">
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
						<h3 class="heading mb-3">Professional Development</h3>
						<p>We support you in your professional development. Find all the resources you need here.</p>
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
									<li><span class="icon-my_location"></span> Recruitable Employer Zone</li>
									<small>End your hunt for the perfect employee</small>
									<li>Search CVs for Free now</li>
									<small>Find the right candidate</small>
									<li>Naukri Job Posting Services and Resume Database Access</li>
									<small>Call 1800-102-2558 for Employer products</small>
									<li>Campus Hiring Solutions</li>
									<small>Optimize your Fresher Hiring</small>
									<li>Naukri RMS</li>
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
				<h2><span>Recent</span> Blog</h2>
			</div>
		</div>
		<div class="row d-flex">
			<div class="col-md-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
					</a>
					<div class="text mt-3">
						<div class="meta mb-2">
							<div><a href="#">December 2, 2018</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
						</div>
						<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto enim non iste maxime optio, ut com</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
					</a>
					<div class="text mt-3">
						<div class="meta mb-2">
							<div><a href="#">December 2, 2018</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
						</div>
						<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nobis natus incidunt officia assumenda.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
					</a>
					<div class="text mt-3">
						<div class="meta mb-2">
							<div><a href="#">December 2, 2018</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
						</div>
						<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi obcaecati praesentium,</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
					</a>
					<div class="text mt-3">
						<div class="meta mb-2">
							<div><a href="#">December 2, 2018</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
						</div>
						<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor minima, dolores quis, dolorum accusamu</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection