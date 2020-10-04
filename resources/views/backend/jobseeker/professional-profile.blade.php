@extends('layouts.career-profile')
@section('content')
<div class="container">
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
                    <!-- <i class="flaticon-user-4"></i> -->
                    Skip to Dashboard
                  </a>
                </div>
              </div>
              <div class="col-7 col-md-10">
                <div class="tab-content" id="v-pills-with-icon-tabContent">
                  <div class="tab-pane fade show active" id="personal-&-professional-details" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
                    <p>Personal & Professional Details Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  </div>
                  <div class="tab-pane fade" id="education-details" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                    <p>Education Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                  </div>
                  <div class="tab-pane fade" id="work-experience" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                    <p>Work Experience Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                  </div>
                  <div class="tab-pane fade" id="achievements" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                    <p>Achievements Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                  </div>
                  <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                    <p>Skills Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                  </div>
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