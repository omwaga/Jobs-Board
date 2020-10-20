@extends('layouts.backend-master')
@section('content')
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Job Applications</h4>
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
            <a href="#">Job Applications</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-8">
          @foreach($applications as $application)
          <div class="card p-3">  
            <div class="d-flex align-items-center">
              <div class="border p-2 d-inline-block mr-3 rounded">
                <img src="{{asset('front/images/featured-listing-1.jpg')}}" alt="Free Website Template By Free-Template.co">
              </div>
              <div>
                <h2>{{$application->vacancy->job_title ?? ''}}</h2>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{$application->employer->name ?? ''}}</span>
                </div>
              </div>
            </div>
            <div>
              <div class="btn-group pull-right">
                <a href="{{route('jobseeker.singlejob', $application->vacancy->slug)}}" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="col-md-4">
          ,,,
        </div>
      </div>
    </div>
  </div>
</div>
@endsection