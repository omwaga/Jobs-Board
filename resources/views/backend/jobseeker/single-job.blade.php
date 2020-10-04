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


      <section class="site-section card">
        <div class="container p-3">
          <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <div class="border p-2 d-inline-block mr-3 rounded">
                  <img src="{{asset('front/images/featured-listing-1.jpg')}}" alt="Free Website Template By Free-Template.co">
                </div>
                <div>
                  <h2>{{$job->job_title ?? ''}}</h2>
                  <div>
                    <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{$job->user->name ?? ''}}</span>
                    <span class="m-2"><span class="icon-room mr-2"></span>{{$job->postcity->name ?? ''}}</span>
                    <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">{{$job->postjobtype->name ?? ''}}</span></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-6">
                  <a href="#" class="btn btn-block btn-secondary btn-md">
                    <i class="fas fa-heart"></i> Save
                  Job</a>
                </div>
                <div class="col-6">
                  <a href="{{route('jobseeker.applications.create')}}" class="btn btn-block btn-primary btn-md">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="mb-5">
                {!!$job->description!!}
              </div>
            </div>
            <div class="col-lg-4">
              <div class="bg-light p-3 border rounded mb-4">
                <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                <ul class="list-unstyled pl-3 mb-0">
                  <li class="mb-2"><strong class="text-black">Published on:</strong> {{$job->created_at->diffForHumans() ?? ''}}</li>
                  <li class="mb-2"><strong class="text-black">Employment Status:</strong> {{$job->postjobtype->name ?? ''}}</li>
                  <li class="mb-2"><strong class="text-black">Experience:</strong> 2 to 3 year(s)</li>
                  <li class="mb-2"><strong class="text-black">Job Location:</strong> {{$job->postcity->name ?? ''}}</li>
                  <li class="mb-2"><strong class="text-black">Salary:</strong> {{$job->salary ?? ''}}</li>
                  <li class="mb-2"><strong class="text-black">Application Deadline:</strong> April 28, 2019</li>
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
              @include('backend.jobseeker.singlejob-sidebar')
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
@endsection