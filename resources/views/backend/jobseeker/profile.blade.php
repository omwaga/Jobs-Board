@extends('layouts.backend-master')
@section('content')
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<h4 class="page-title">My Account</h4>
			<div class="row">
				<div class="col-md-8">
					<div class="card card-with-nav">
						<div class="card-header">
							<div class="row row-nav-line">
								<ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
									<li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Account Settings</a> </li>
								</ul>
							</div>
						</div>
						<div class="card-body">
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Upload Profile Picture</label>
										<input type="file" class="form-control" name="name" placeholder="Name" value="{{auth()->user()->name}}">
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Job Title/Designation</label>
										<input type="text" class="form-control" name="name" placeholder="Name" value="{{auth()->user()->name}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Show My Profile to Employers</label>
										<input type="email" class="form-control" name="email" placeholder="Name" value="{{auth()->user()->email}}">
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Name</label>
										<input type="text" class="form-control" name="name" placeholder="Name" value="{{auth()->user()->name}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Email</label>
										<input type="email" disabled="" class="form-control" name="email" placeholder="Name" value="{{auth()->user()->email}}">
									</div>
								</div>
							</div>
							<div class="row mt-3 mb-1">
								<div class="col-md-12">
									<div class="form-group form-group-default">
										<label>About Me</label>
										<textarea class="form-control" name="about" placeholder="About Me" rows="3">{{auth()->user()->about ?? ''}}</textarea>
									</div>
								</div>
							</div>
							<div class="text-right mt-3 mb-3">
								<button class="btn btn-success">Save</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-profile card-secondary">
						<div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
							<div class="profile-picture">
								<div class="avatar avatar-xl">
									<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="user-profile text-center">
								<div class="name">{{auth()->user()->name ?? ''}}</div>
								<div class="job">{{auth()->user()->job_title ?? ''}}</div>
								<div class="desc">{{auth()->user()->about ?? ''}}</div>
								<div class="view-profile">
									@can('create-resume')
									@if(!auth()->user()->selectedLevel)
									<a href="{{route('jobseeker.levelSelection')}}" class="btn btn-secondary btn-block">My Resume</a>
									@else
									<a href="{{route('jobseeker.'.auth()->user()->selectedLevel->level)}}" class="btn btn-secondary btn-block">My Resume</a>
									@endif
									@endcan
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="row user-stats text-center">
								<div class="col">
									<div class="number">125</div>
									<div class="title">Post</div>
								</div>
								<div class="col">
									<div class="number">25K</div>
									<div class="title">Followers</div>
								</div>
								<div class="col">
									<div class="number">134</div>
									<div class="title">Following</div>
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