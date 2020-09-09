@extends('layouts.front')
@section('content')

<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-12 ftco-animate text-center mb-5">
       <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Job Post</span></p>
       <h1 class="mb-3 bread">Post A Job</h1>
     </div>
   </div>
 </div>
</div>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-lg-12 mb-5">

        <form action="#" class="p-5 bg-white">

          <div class="row form-group">
            <div class="col-md-12" align="center"><h3>Company Details</h3></div>
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Company Name</label>
              <input type="text" id="fullname" class="form-control" placeholder="eg. Facebook, Inc.">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Company Type</label>
                  <select class="form-control">
                    <option value="">Select Company Type</option>
                    @foreach($company_types as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Country</label>
                  <select class="form-control">
                    <option value="">Select Country</option>
                    @foreach($countries as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Official Email</label>
                  <input type="text" id="fullname" class="form-control" placeholder="eg. Facebook, Inc.">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Contact Person's Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="eg. Facebook, Inc.">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Password</label>
                  <input type="text" id="fullname" class="form-control" placeholder="eg. Facebook, Inc.">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Industry</label>
                  <select class="form-control">
                    <option value="">Select Industry</option>
                    @foreach($industries as $industry)
                    <option value="{{$industry->id}}">{{$industry->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">City</label>
                  <select class="form-control">
                    <option value="">Select City</option>
                    @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Mobile/Landline</label>
                  <input type="text" id="fullname" class="form-control" placeholder="eg. Facebook, Inc.">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Logo</label>
                  <input type="text" id="fullname" class="form-control" placeholder="eg. Facebook, Inc.">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Confirm Password</label>
                  <input type="text" id="fullname" class="form-control" placeholder="eg. Facebook, Inc.">
                </div>
              </div>
            </div>            
          </div>
          
          <div class="row form-group">
            <div class="col-md-12" align="center"><h3>Job Details</h3></div>
            <div class="col-md-12 mb-3 mb-md-0">
              <label for="option-price-1">
                <input type="checkbox" id="option-price-1"> <span class="text-success">Free</span> For 2 weeks
              </label>
            </div>
            <div class="col-md-12 mb-3 mb-md-0">
              <label for="option-price-1">
                <input type="checkbox" id="option-price-1"> <span class="text-success">$500</span> For 30 days
              </label>
            </div>
            <div class="col-md-12 mb-3 mb-md-0">
              <label for="option-price-2">
                <input type="checkbox" id="option-price-2"> <span class="text-success">$300</span> / Monthly Recurring
              </label>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Job Title</label>
              <input type="text" id="fullname" class="form-control" placeholder="eg. Professional UI/UX Designer">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="fullname">Job Category</label>
                  <select class="form-control">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3">
                  <label class="font-weight-bold" for="fullname">Country</label>
                  <select class="form-control">
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
                  <label class="font-weight-bold" for="fullname">Job Type</label><br>                  
                  <select class="form-control">
                    <option value="">Select City</option>
                    @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">City</label>
                  <select class="form-control">
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
              <label class="font-weight-bold" for="fullname">Salary Specification</label>
              <input type="text" id="fullname" class="form-control" placeholder="eg. Professional UI/UX Designer">
            </div>
          </div>
          
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Job Description</label>
              <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
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