@extends('layouts.backend-master')
@section('content')
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">User Management</h4>
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
						<a href="#">User Management</a>
					</li>
				</ul>
			</div>
			<div class="card card-profile card-secondary">
				<div class="card-header" style="background-image: url('{{asset('storage/user_profiles/'.$user->profile_picture)}}')">
					<div class="profile-picture">
						<div class="avatar avatar-xl">
							<img src="{{asset('storage/user_profiles/'.$user->profile_picture)}}" alt="..." class="avatar-img rounded-circle">
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="user-profile text-center">
						<div class="name">{{$user->name}}</div>
						<div class="job">Frontend Developer</div>
						<div class="desc">A man who hates loneliness</div>
						<div class="social-media">
							<a class="btn btn-info btn-twitter btn-sm btn-link" href="#"> 
								<span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
							</a>
							<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
								<span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span> 
							</a>
							<a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#"> 
								<span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
							</a>
							<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
								<span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span> 
							</a>
						</div>
					</div>
				</div>

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

			<div class="">
				<div class="card p-3">
					<div class="timeline-heading">
						<h4 class="timeline-title">Mussum ipsum cacilds</h4>
						<p><small class="text-muted"><i class="flaticon-calendar"></i> 11 hours ago via Twitter</small></p>
					</div>
					<div class="timeline-body">
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts, there live the blind texts, there live the blind texts.</p>
					</div>
				</div>
			</div>

			<div class="">
				<div class="card p-3">
					<div class="timeline-heading">
						<h4 class="timeline-title">Mussum ipsum cacilds</h4>
						<p><small class="text-muted"><i class="flaticon-calendar"></i> 11 hours ago via Twitter</small></p>
					</div>
					<div class="timeline-body">
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection