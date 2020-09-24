@extends('layouts.backend-master')
@section('content')	

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Edit City</h4>
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
						<a href="{{route('admin.cities.index')}}"> Cities</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">{{$city->name}}</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Edit City - {{$city->name}}</div>
						</div>
						<div class="card-body">
							<form method="Post" action="{{route('admin.cities.update', $city->id)}}">
								@csrf
								@method('PATCH')
								<div class="form-group">
									<label for="email2">Name</label>
									<input class="form-control" name="name" type="text" required value="{{$city->name}}" />
								</div>
								<div class="form-group">
									<label for="email2">Country</label>
									<select class="form-control m-bot15" name="country_id">
										<option value="{{$city->country_id}}">{{$city->country->name}}</option>
										@foreach($countries as $country)
										<option value="{{$country->id}}">{{$country->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button class="btn btn-primary" type="submit">Update</button>
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
@endsection