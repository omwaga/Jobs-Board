@extends('layouts.front')
@section('content')

@include('front.banner')

<section class="site-section bg-light pt-5">
  <div class="container">
    <div class="row align-items-center mb-5 pb-3 bg-white">
      <div class="col-lg-8 mb-4 mb-lg-0">
        <div class="d-flex align-items-center">
          <div class="border p-2 d-inline-block mr-3 rounded">
            <img src="{{asset('front/images/logo.png')}}" alt="{{$job->job_title}}">
          </div>
          <div>
            <h2>{{$job->job_title ?? ''}}</h2>
            <div>
              <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{$job->user->name ?? ''}}</span>
              <span class="m-2"><span class="icon-room mr-2"></span>{{$job->postcity->name ?? ''}}, {{$job->postcountry->name}}</span>
              <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">{{$job->postjobtype->name ?? ''}}</span></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-6">
            <a href="{{route('login')}}" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
          </div>
          <div class="col-6">
            <a href="{{route('login')}}" class="btn btn-block btn-primary btn-md">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row pb-5">
      <div class="col-lg-8 bg-white">
        <div class="mb-5">
          {!!$job->description!!}

          <h5 class="text-primary">Application Details</h5>          
          {!!$job->how_to_apply!!}
        </div>

        <div class="row mt-5 mb-5">
          <div class="col-6">
            <a href="{{route('login')}}" class="btn btn-danger">Login to Apply</a>
          </div>
          <div class="col-6 text-left">
            <a href="{{route('front.jobseeker.register')}}" class="btn btn-primary float-right">Register to Apply</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="p-3 border rounded mb-4 bg-white">
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

        <div class="mb-3 p-3 border rounded bg-white">
          <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
          <div class="px-3">
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
          </div>
        </div>

        @include('front.singlejob-sidebar')
      </div>
    </div>
    @include('front.similar-jobs')
  </div>
</section>
@endsection