@extends('layouts.backend-master')
@section('content')

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">{{$job->job_title ?? 'Job Vacancy'}}</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="{{route('jobseeker.home')}}">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="{{route('jobseeker.home')}}">Dashboard</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="{{route('jobseeker.vacancies')}}">Job Listings</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">{{$job->job_title ?? 'Job Vacancy'}}</a>
          </li>
        </ul>
      </div>

      <section class="site-section card">
        <div class="container p-3">
          <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <div class="border p-2 d-inline-block mr-3 rounded">
                  <img src="{{asset('assets/img/logo.png')}}" width="100px" alt="{{$job->job_title ?? 'job vacancy'}}">
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
                  <form method="POST" action="{{route('jobseeker.savedjobs.store')}}">
                    @csrf
                    <input type="hidden" name="vacancy_id" value="{{$job->id}}">
                    <button type="submit" class="btn btn-secondary align-items-center">
                      <i class="fas fa-heart"></i> Save Job
                    </button>
                  </form>
                </div>
                <div class="col-6">
                  <a href="{{route('jobseeker.application.create', $job->id)}}" class="btn btn-block btn-primary btn-md">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="mb-5">
                {!!$job->description!!}
                <h3 class="text-primary b">Application Details</h3>          
                {!!$job->how_to_apply!!}
              </div>
              <hr>
              <div class="col-4">
                <a href="{{route('jobseeker.application.create', $job->id)}}" class="btn btn-block btn-primary btn-md">Apply Now</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="bg-light p-3 border rounded mb-4">
                <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                <ul class="list-unstyled pl-3 mb-0">
                  <li class="mb-2"><strong class="text-black">Published on:</strong> {{$job->created_at->diffForHumans() ?? ''}}</li>
                  <li class="mb-2"><strong class="text-black">Employment Status:</strong> {{$job->postjobtype->name ?? ''}}</li>
                  <li class="mb-2"><strong class="text-black">Experience:</strong> {{$job->required_experience ?? ''}}</li>
                  <li class="mb-2"><strong class="text-black">Job Location:</strong> {{$job->postcity->name ?? ''}}</li>
                  <li class="mb-2"><strong class="text-black">Salary:</strong> {{$job->salary ?? ''}}</li>
                  <li class="mb-2"><strong class="text-black">Application Deadline:</strong> {{$job->application_deadline ?? ''}}</li>
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
              @include('backend.jobseeker.singlejob-sidebar')
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
@endsection