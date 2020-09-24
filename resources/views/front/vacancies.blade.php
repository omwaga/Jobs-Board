@extends('layouts.front')
@section('content')

<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-start">
			<div class="col-md-12 ftco-animate text-center mb-5">
				<p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About</span></p>
				<h1 class="mb-3 bread">Browse Jobs</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 pr-lg-4">
				<div class="row">
					@forelse($vacancies as $vacancy)
					<div class="col-md-12 ftco-animate">
						<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
							<div class="one-third mb-4 mb-md-0">
								<div class="job-post-item-header align-items-center">
									<span class="subadge">{{$vacancy->postjobtype->name ?? ''}}</span>
									<h2 class="mr-3 text-black"><a href="{{route('front.singlejob', $vacancy->job_title)}}">{{$vacancy->job_title ?? ''}}</a></h2>
								</div>
								<div class="job-post-item-body d-block d-md-flex">
									<div class="mr-3"><span class="icon-layers"></span> <a href="#">{{$vacancy->user->name ?? ''}}</a></div>
									<div><span class="icon-my_location"></span> <span>{{$vacancy->postcity->name ?? ''}}, {{$vacancy->postcountry->name ?? ''}}</span></div>
								</div>
							</div>

							<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
								<div>
									<a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
										<span class="icon-heart"></span>
									</a>
								</div>
								<a href="{{route('front.singlejob', $vacancy->job_title)}}" class="btn btn-primary py-2">Apply Job</a>
							</div>
						</div>
					</div><!-- end -->
					@empty
					<p>Nothing Yet</p>
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
			@include('front.jobs-sidebar')
		</div>
	</div>
</section>


<section class="ftco-section-parallax">
	<div class="parallax-img d-flex align-items-center">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<h2>Subcribe to our Newsletter</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
					<div class="row d-flex justify-content-center mt-4 mb-4">
						<div class="col-md-12">
							<form action="#" class="subscribe-form">
								<div class="form-group d-flex">
									<input type="text" class="form-control" placeholder="Enter email address">
									<input type="submit" value="Subscribe" class="submit px-3">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection