@extends('layouts.backend-master')
@section('content')	

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Add City</h4>
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
						<a href="#">Add City</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Add City</div>
						</div>
						<div class="card-body">
							<form method="Post" action="{{route('admin.cities.store')}}">
								@csrf
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" name="name" type="text" required value="{{old('name')}}" />
								</div>
								<div class="form-group">
									<label>Country</label>
									<select class="form-control m-bot15" name="country_id">
										<option value="">Select Country</option>
										@foreach($countries as $country)
										<option value="{{$country->id}}">{{$country->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea class="form-control" name="description">{{old('description')}}</textarea>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button class="btn btn-primary" type="submit">Add</button>
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