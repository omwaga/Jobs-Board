@extends('layouts.front')
@section('content')

@include('front.banner')

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-lg-12 mb-5">

        <form action="{{route('register')}}" method="POST" class="p-5 bg-white">
          @csrf
          <input type="hidden" name="JobPost" value="JobPost">

          <div class="row form-group">
            <div class="col-md-12" align="center"><h3>Company Details</h3></div>
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold">Company Name</label>
              <input type="text" name="name" class="form-control" placeholder="eg. Facebook, Inc.">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Company Type</label>
                  <select class="form-control" name="company_type">
                    <option value="">Select Company Type</option>
                    @foreach($company_types as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Country</label>
                  <select class="form-control" name="country_id">
                    <option value="">Select Country</option>
                    @foreach($countries as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Official Email</label>
                  <input type="text" class="form-control" name="email" placeholder="eg. mail@mail.com">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Contact Person's Name</label>
                  <input type="text" name="contact_person" class="form-control" placeholder="eg. John Doe">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="eg. Password">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Industry</label>
                  <select class="form-control" name="industry_id">
                    <option value="">Select Industry</option>
                    @foreach($industries as $industry)
                    <option value="{{$industry->id}}">{{$industry->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">City</label>
                  <select class="form-control" name="city_id">
                    <option value="">Select City</option>
                    @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Mobile/Landline</label>
                  <input type="text" name="phone_number" class="form-control" placeholder="eg. +254700000000">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Logo</label>
                  <input type="file" class="form-control" name="logo">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control" placeholder="eg. Password">
                </div>
              </div>
            </div>            
          </div>
          
          <div class="row form-group">
            <div class="col-md-12" align="center"><h3>Job Details</h3></div>
            @foreach($posting_subscriptions as $subscription)
            <div class="col-md-12 mb-3 mb-md-0">
              <label for="option-price-1">
                <input type="checkbox" id="option-price-1" value="{{$subscription->id}}" name="subscription"> <span class="text-success">{{$subscription->name}}</span> {{$subscription->description}}
              </label>
            </div>
            @endforeach
          </div>

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold">Job Title</label>
              <input type="text" name="job_title" class="form-control" placeholder="eg. Professional UI/UX Designer">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Job Category</label>
                  <select class="form-control" name="category">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3">
                  <label class="font-weight-bold">Country</label>
                  <select class="form-control" name="country">
                    <option value="">Select Country</option>
                    @foreach($countries as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Job Type</label><br>                  
                  <select class="form-control" name="job_type">
                    <option value="">Select Job Type</option>
                    @foreach($job_types as $job_type)
                    <option value="{{$job_type->id}}">{{$job_type->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">City</label>
                  <select class="form-control" name="city">
                    <option value="">Select City</option>
                    @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold">Salary Specification</label>
              <input type="text" name="salary" class="form-control" placeholder="eg. ksh 5000">
            </div>
          </div>
          
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold">Job Description</label>
              <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Post" class="btn btn-primary  py-2 px-5">
            </div>
          </div>


        </form>
      </div>
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