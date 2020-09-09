@extends('layouts.front')
@section('content')
@include('front.banner')

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-lg-6 mb-5">

				<form action="{{ route('register') }}" method="POST" class="p-5 bg-white">
					@csrf

					<div class="row form-group">
						<div class="col-md-12 mb-md-0">
							<label class="font-weight-bold" for="fullname">Company Name</label>					
							<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

							@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12 mb-md-0">
							<label class="font-weight-bold" for="fullname">Official Email</label>
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div> 

					<div class="row form-group">
						<div class="col-md-12 mb-md-0">
							<label class="font-weight-bold">Password</label>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

							@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div> 

					<div class="row form-group">
						<div class="col-md-12 mb-md-0">
							<label class="font-weight-bold">Confirm Password</label>				
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						</div>
					</div>


					<div class="row form-group">
						<div class="col-md-12 mb-md-0">
							<label class="font-weight-bold" for="fullname">Mobile/Landline</label>
							<input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{old('phone_number')}}" required>

							@error('phone_number')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div> 

					<div class="row form-group">
						<div class="col-md-12 mb-md-0">
							<label class="font-weight-bold">Contact Person's Name</label>
							<input id="contact_person" type="text" class="form-control @error('contact_person') is-invalid @enderror" name="contact_person" value="{{old('contact_person')}}" required>

							@error('contact_person')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div> 
				</div>

				<div class="col-md-12 col-lg-6 mb-5">

					<div class="p-5 bg-white">
						<div class="row form-group">
							<label class="font-weight-bold">Company Type</label>
							@foreach($company_types as $company_type)
							<div class="col-md-12 mb-3 mb-md-0">
								<label for="option-job-type-1">
									<input type="radio" id="option-job-type-1" value="{{$company_type->id}}" name="company_type"> {{$company_type->name}}
								</label>
							</div>
							@endforeach

						</div>

						<div class="row form-group">
							<div class="col-md-12 mb-md-0">
								<label class="font-weight-bold" for="fullname">Industry</label>
								<select id="industry_id" class="form-control @error('industry_id') is-invalid @enderror" name="industry_id">
									<option value="">Select Industry</option>
									@foreach($industries as $industry)
									<option value="{{$industry->id}}">{{$industry->name}}</option>
									@endforeach
								</select>

								@error('industry_id')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div> 

						<div class="row form-group">
							<div class="col-md-12 mb-md-0">
								<label class="font-weight-bold">Country</label>

								<select id="country_id" class="form-control @error('country_id') is-invalid @enderror" name="country_id">
									<option value="">Select Country</option>
									@foreach($countries as $key => $value)
									<option value="{{$key}}">{{$value}}</option>
									@endforeach
								</select>

								@error('country_id')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div> 

						<div class="row form-group">
							<div class="col-md-12 mb-md-0">
								<label class="font-weight-bold" for="fullname">City</label>	
								<select id="city_id" class="form-control @error('city_id') is-invalid @enderror" name="city_id">
									<option value="">Select City</option>
									@foreach($cities as $city)
									<option value="{{$city->id}}">{{$city->name}}</option>
									@endforeach
								</select>

								@error('city_id')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div> 
						<input type="hidden" name="company" value="company">

						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" value="Register" class="btn btn-primary  py-2 px-5 float-right">
							</div>
						</div> 
					</div>         
				</form>
			</div>
		</div>
	</div>
</section>
@endsection