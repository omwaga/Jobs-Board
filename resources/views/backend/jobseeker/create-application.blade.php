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
                    <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="fas fa-facebook"></span></a>
                    <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                    <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                    <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <form action="" method="">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email2">Full Name</label>
                        <input type="email" class="form-control" id="email2" placeholder="Enter Email">
                      </div>
                      <div class="form-group">
                        <label for="email2">Phone Number</label>
                        <input type="email" class="form-control" id="email2" placeholder="Enter Email">
                      </div>
                      <div class="form-group">
                        <label for="email2">Country</label>
                        <input type="email" class="form-control" id="email2" placeholder="Enter Email">
                      </div>
                      <div class="form-group">
                        <label for="email2">City</label>
                        <input type="email" class="form-control" id="email2" placeholder="Enter Email">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email2">Email Address</label>
                        <input type="email" class="form-control" id="email2" placeholder="Enter Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Upload CV</label>
                        <input type="file" class="form-control-file" value="{{$cv->document_file}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Cover Letter</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="card-action">
            <button class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
      @endsection