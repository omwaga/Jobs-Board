@extends('layouts.career-profile')
@section('content')
<div class="container" id="app" v-cloak>
  <div class="content">
    <div class="page-inner">
      <h4 class="page-title text-center">Welcome {{auth()->user()->name ?? ''}},</h4>

      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Welcome {{auth()->user()->name ?? ''}}, Your profile is your first impression, follow the instructions and fill the details.</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-5 col-md-2">
                <div class="nav flex-column nav-pills nav-secondary nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-profile-tab-icons" data-toggle="pill" href="#personal-&-professional-details" role="tab" aria-controls="v-pills-profile-icons" aria-selected="true">
                    <!-- <i class="flaticon-user-4"></i> -->
                    Personal & Professional Details
                  </a>
                  <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#education-details" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                    <!-- <i class="flaticon-user-4"></i> -->
                    Education Details
                  </a>
                  <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#work-experience" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                    <!-- <i class="flaticon-user-4"></i> -->
                    Work Experience
                  </a>
                  <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#achievements" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                    <!-- <i class="flaticon-user-4"></i> -->
                    Achievements
                  </a>
                  <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#skills" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                    <!-- <i class="flaticon-user-4"></i> -->
                    Skills
                  </a>
                  <a class="nav-link" href="{{route('jobseeker.home')}}">
                    Skip to Dashboard
                  </a>
                </div>
              </div>
              <div class="col-7 col-md-10">
                <div class="tab-content" id="v-pills-with-icon-tabContent">                  
                  @include('backend.jobseeker.profile.details')
                  @include('backend.jobseeker.profile.education')
                  @include('backend.jobseeker.profile.experience')
                  @include('backend.jobseeker.profile.achievement')
                  @include('backend.jobseeker.profile.skills')
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection