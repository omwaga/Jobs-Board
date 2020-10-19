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
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Create Application</a>
          </li>
        </ul>
      </div>

      <div class="container">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Apply for <a href="">{{$vacancy->job_title ?? ''}}</a></div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="bg-light p-3 border rounded mb-4">
                  <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                  <ul class="list-unstyled pl-3 mb-0">
                    <li class="mb-2"><strong class="text-black">Published on:</strong> {{$vacancy->created_at->diffForHumans() ?? ''}}</li>
                    <li class="mb-2"><strong class="text-black">Employment Status:</strong> {{$vacancy->postjobtype->name ?? ''}}</li>
                    <li class="mb-2"><strong class="text-black">Experience:</strong> {{$vacancy->required_experience ?? ''}}</li>
                    <li class="mb-2"><strong class="text-black">Job Location:</strong> {{$vacancy->postcity->name ?? ''}}</li>
                    <li class="mb-2"><strong class="text-black">Salary:</strong> {{$vacancy->salary ?? ''}}</li>
                    <li class="mb-2"><strong class="text-black">Application Deadline:</strong> {{$vacancy->application_deadline ?? ''}}</li>
                  </ul>
                </div>

                <div class="bg-light p-3 border rounded">
                  <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                  <div class="px-3">
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0 h1 text-success"><span class="fab fa-whatsapp"></span></a>
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0 h1 text-primary"><span class="fab fa-facebook"></span></a>
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0 h1 text-info"><span class="fab fa-twitter"></span></a>
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0 h1 text-secondary"><span class="fab fa-linkedin"></span></a>
                  <a href="#" class="pt-3 pb-3 pr-3 pl-0 h1 text-warning"><span class="fab fa-instagram"></span></a>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <form action="{{route('jobseeker.application.store', $vacancy->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email2">Full Name</label>
                        <input type="text" class="form-control" name="full_name" value="{{old('full_name')}}" placeholder="Enter Full Name">
                      </div>
                      <div class="form-group">
                        <label for="email2">Phone Number</label>
                        <input type="text" class="form-control" name="phone_number" value="{{old('phone_number')}}"  placeholder="Enter Phone Number">
                      </div>
                      <div class="form-group">
                        <label for="email2">Country</label>
                        <select class="form-control" name="country">
                          <option value="">Select Country</option>
                          @foreach($countries as $country)
                          <option value="{{$country->id ?? ''}}">{{$country->name ?? ''}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="email2">City/State</label>
                        <select class="form-control" name="city">
                          <option value="">Select City/State</option>
                          @foreach($cities as $city)
                          <option value="{{$city->id ?? ''}}">{{$city->name ?? ''}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email2">Email Address</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}"  placeholder="Enter Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Upload CV</label>
                        <input type="file" class="form-control-file" name="resume">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Cover Letter</label>
                        <input type="file" class="form-control-file" name="cover_letter">
                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <a href="#" class="btn btn-info">Back to Job Description</a>
                    <button class="btn btn-success" type="submit">Submit Application</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection