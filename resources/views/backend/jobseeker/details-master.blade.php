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

			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Welcome {{auth()->user()->name ?? ''}}, Your profile is your first impression, follow the instructions and fill the details.</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-5 col-md-2">
								<div class="nav flex-column nav-pills nav-secondary nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
									<a class="nav-link active" id="v-pills-home-tab-icons" data-toggle="pill" href="#v-pills-home-icons" role="tab" aria-controls="v-pills-home-icons" aria-selected="true">
										<i class="flaticon-home"></i>
										Work experience
									</a>
									<a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
										<i class="flaticon-user-4"></i>
										Education Details
									</a>
									<a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
										<i class="flaticon-user-4"></i>
										Achievements
									</a>
								</div>
							</div>
							<div class="col-7 col-md-10">
								<div class="tab-content" id="v-pills-with-icon-tabContent">
									<div class="tab-pane fade show active" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
									<div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
										<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection