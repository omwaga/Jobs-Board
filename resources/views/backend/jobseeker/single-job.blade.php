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

      <div class="container p-3">
        <div class="card p-3">
          <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <div class="border p-2 d-inline-block mr-3 rounded">
                  <img src="{{asset('assets/img/logo.png')}}" width="100px" alt="{{$job->job_title ?? 'job vacancy'}}">
                </div>
                <div>
                  <h2>{{$job->job_title ?? ''}}</h2>
                  <div>
                    <span class="ml-0 mr-2 mb-2"><span class="fas fa-briefcase mr-2"></span>{{$job->user->name ?? ''}}</span>
                    <span class="m-2"><span class="fas fa-map-marker mr-2"></span>{{$job->postcity->name ?? ''}}</span>
                    @if($job->postjobtype->name === 'Full Time')
                    <span class="bg-warning text-white badge py-2 px-3">{{$job->postjobtype->name ?? ''}}</span>
                    @elseif($job->postjobtype->name === 'Part Time')
                    <span class="bg-primary text-white badge py-2 px-3">{{$job->postjobtype->name ?? ''}}</span>
                    @elseif($job->postjobtype->name === 'Internship')
                    <span class="bg-secondary text-white badge py-2 px-3">{{$job->postjobtype->name ?? ''}}</span>
                    @elseif($job->postjobtype->name === 'Freelance')
                    <span class="bg-info text-white badge py-2 px-3">{{$job->postjobtype->name ?? ''}}</span>
                    @elseif($job->postjobtype->name === 'Temporary')
                    <span class="bg-danger text-white badge py-2 px-3">{{$job->postjobtype->name ?? ''}}</span>
                    @endif
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
                    <button type="submit" class="btn btn-danger align-items-center">
                      <i class="fas fa-heart"></i> Save Job
                    </button>
                  </form>
                </div>
                <div class="col-6">
                  <button class="btn btn-block btn-primary btn-md" data-toggle="modal" data-target="#application">Apply Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="card col-lg-8 p-3">
            <div class="mb-5">
              {!!$job->description!!}
              <h3 class="text-primary b">Application Details</h3>          
              {!!$job->how_to_apply!!}
            </div>
            <hr>
            <div class="col-4">
              <button class="btn btn-block btn-primary btn-md" data-toggle="modal" data-target="#application">Apply Now</button>
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
    </div>
  </div>
</div>


<!--Application method selection Modal -->
<div class="modal fade" id="application" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center">How do you want to apply?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="container pt-3">    
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="card card-stats card-round">
              <div class="card-body text-center">
                <div class="icon-big text-center">
                  <i class="fas fa-graduation-cap"></i>
                </div>
                @if(!auth()->user()->selectedLevel)
                <a  href="{{route('jobseeker.levelSelection')}}" class="btn btn-info">Recruitable Apply</a> 
                @else
                <a  href="{{route('jobseeker.'.auth()->user()->selectedLevel->level)}}" class="btn btn-info">Recruitable Apply
                </a> 
                @endif
                <p class="card-category">I have just graduated/ I haven't worked after graduation</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="card card-stats card-round">
              <div class="card-body text-center">
                <div class="icon-big text-center">
                  <i class="fas fa-graduation-cap"></i>
                </div>
                <a href="{{route('jobseeker.application.create', $job->id)}}" class="btn btn-info">Send CV and Cover Letter</a>
                <p class="card-category">I have at least one month of work experience</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection