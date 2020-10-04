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
                  <a class="nav-link" id="v-pills-home-tab-icons" data-toggle="pill" href="#internships" role="tab" aria-controls="v-pills-home-icons" aria-selected="false">
                    <!-- <i class="flaticon-home"></i> -->
                    Internships
                  </a>
                  <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#projects" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                    <!-- <i class="flaticon-user-4"></i> -->
                    Projects
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
                    <form method="Post" action="{{route('jobseeker.details.store')}}">
                      @csrf
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>First Name</label>                          
                            <input class="form-control" name="first_name" type="text" required value="{{old('first_name')}}" />
                          </div>
                          <div class="form-group">
                            <label>Phone Number</label>                          
                            <input class="form-control" name="phone_number" type="text" required value="{{old('phone_number')}}" />
                          </div>
                          <div class="form-check">
                            <label>Gender</label><br/>
                            <label class="form-radio-label">
                              <input class="form-radio-input" type="radio" name="gender" value="Male">
                              <span class="form-radio-sign">Male</span>
                            </label>
                            <label class="form-radio-label ml-3">
                              <input class="form-radio-input" type="radio" name="gender" value="Female">
                              <span class="form-radio-sign">Female</span>
                            </label>
                          </div>
                          <div class="form-group">
                            <label>Date Of Birth</label>                          
                            <input class="form-control" name="date_of_birth" type="date" required value="{{old('date_of_birth')}}" />
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Last Name</label>                          
                            <input class="form-control" name="last_name" type="text" required value="{{old('last_name')}}" />
                          </div>
                          <div class="form-group">
                            <label>Email</label>                          
                            <input class="form-control" name="email" type="text" required value="{{old('email')}}" />
                          </div>
                          <div class="form-group">
                            <label>Home City</label>                           
                            <select class="form-control" name="home_city">
                              <option>Select Home City</option>
                              <option>Male</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Current Location</label>
                            <select class="form-control" name="current_location">
                              <option>Select Current Location</option>
                              <option>Male</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>When to start working</label>                                                   
                            <select class="form-control" name="when_to_start">
                              <option>Select when to start working</option>
                              <option>Male</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Preferred work location</label>                                                 
                            <select class="form-control" name="preferred_location">
                              <option>Select Preferred Location</option>
                              <option>Male</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Preferred Job Type</label>                                                     
                            <select class="form-control" name="job_type">
                              <option>Select Preferred Job Type</option>
                              <option>Male</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-secondary pull-right">Save</button>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="education-details" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                    <form method="Post" action="{{route('jobseeker.educations.store')}}">
                      @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <p>Please select the level of education you are currently pursuing</p>
                            <select class="form-control" name="education_level">
                              <option>Primary Education</option>
                              <option>Secondary Education</option>
                              <option>Tertiary Education</option>
                            </select>
                            <small>If you are not currently pursuing please select your highest qualification</small>
                          </div>
                          <div class="form-group">
                            <label>Course Name</label>                          
                            <input class="form-control" name="course" type="text" required value="{{old('course')}}" />
                          </div>
                          <div class="form-group">
                            <label>Your Institution Name</label>                          
                            <input class="form-control" name="institution" type="text" required value="{{old('institution')}}" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Year of Graduation(Expected Year)</label>                        
                            <input class="form-control" name="graduation_year" type="date" required value="{{old('graduation_year')}}" />
                          </div>
                          <div class="form-group">
                            <label>Course Type</label>                          
                            <select class="form-control" name="course_type">
                              <option>Part Time</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Score</label>                        
                            <input class="form-control" name="score" type="text" required value="{{old('score')}}" />
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-secondary pull-right">Save</button>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="internships" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                    <div class="row">
                      <div class="col-md-8">
                        <form method="Post" action="{{route('jobseeker.internships.store')}}">
                          @csrf
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <p>Have you done any internships? If yes then please enter the company name below</p>
                                <small>I have not doen internship</small>
                                <select class="form-control">
                                  <option>Course</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Organization</label>                          
                                <input class="form-control" name="organization" type="text" required value="{{old('organization')}}" />
                              </div>
                              <div class="form-group">
                                <label>Position</label>                          
                                <input class="form-control" name="position" type="text" required value="{{old('position')}}" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Starting Date</label>                        
                                <input class="form-control" name="start_date" type="date" required value="{{old('start_date')}}" />
                              </div>
                              <div class="form-group">
                                <label>Ending Date</label>                        
                                <input class="form-control" name="end_date" type="date" required value="{{old('end_date')}}" />
                              </div>
                              <div class="form-group">
                                <label>Current Internship</label>                          
                                <select class="form-control" name="current_internship">
                                  <option>Part Time</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Duties and Responsibilities</label>  
                                <textarea class="form-control" name="responsibilities"></textarea>
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-secondary pull-right">Save</button>
                        </form>
                      </div>
                      <div class="col-md-4">
                        <div class="card p-3 bg-secondary">
                          <h4 class="text-center text-white">Why add internship?</h4>
                          <p class="text-white">If you have done any internship in a company, mentioning those will increase your profile views to recruiters</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="projects" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                    <div class="row">
                      <div class="col-md-8">
                        <form method="Post" action="#">
                          @csrf
                          <p>Did you undertake any projects ? If Yes, please add the details below</p>
                          <div class="form-group">
                            <label>Project Name</label>                          
                            <input class="form-control" name="project_name" type="text" required value="{{old('project_name')}}" />
                          </div>
                          <div class="form-group">
                            <label>Description</label>  
                            <textarea class="form-control" name="description"></textarea>
                          </div>
                          <button type="submit" class="btn btn-secondary pull-right">Save</button>
                        </form>
                      </div>
                      <div class="col-md-4">
                        <div class="card p-3 bg-secondary">
                          <h4 class="text-center text-white">Why add Projects?</h4>
                          <p class="text-white">If you have done any project in college, mentioning those will increase your profile views to recruiters</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="work-experience" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                    <div class="row">
                      <div class="col-md-8">
                        <form method="Post" action="{{route('jobseeker.internships.store')}}">
                          @csrf
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <p>Do you have any work experience? If yes then please enter the company name below</p>
                                <small>I have not doen internship</small>
                                <select class="form-control">
                                  <option>Course</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Organization</label>                          
                                <input class="form-control" name="organization" type="text" required value="{{old('organization')}}" />
                              </div>
                              <div class="form-group">
                                <label>Position</label>                          
                                <input class="form-control" name="position" type="text" required value="{{old('position')}}" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Starting Date</label>                        
                                <input class="form-control" name="start_date" type="date" required value="{{old('start_date')}}" />
                              </div>
                              <div class="form-group">
                                <label>Ending Date</label>                        
                                <input class="form-control" name="end_date" type="date" required value="{{old('end_date')}}" />
                              </div>
                              <div class="form-group">
                                <label>Current Work</label>                          
                                <select class="form-control" name="current_work">
                                  <option>Part Time</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Duties and Responsibilities</label>  
                                <textarea class="form-control" name="responsibilities"></textarea>
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-secondary pull-right">Save</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="achievements" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                    <div class="row">
                      <div class="col-md-8">
                        <form method="Post" action="#">
                          @csrf
                          <div class="form-group">
                            <p>If you have done any certification course add them below</p>                   
                            <input class="form-control" name="certification_name" type="text" required value="{{old('certification_name')}}" />
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Starting Date</label>                        
                                <input class="form-control" name="start_date" type="date" required value="{{old('start_date')}}" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Ending Date</label>                        
                                <input class="form-control" name="end_date" type="date" required value="{{old('end_date')}}" />
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-secondary pull-right">Save</button>
                        </form><br><br>
                        <form method="Post" action="#">
                          @csrf
                          <div class="row">
                            <div class="col-md-8">                                
                              <div class="form-group">
                                <p>Please add any award or honor you have achieved</p>                         
                                <input class="form-control" name="name" type="text" required value="{{old('name')}}" />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <small>Students tend to add competitions they have won, it could be academic or extracurricular or any notable achievement</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>You got this award for which degree</label>                         
                            <input class="form-control" name="degree_name" type="text" required value="{{old('degree_name')}}" />
                          </div>
                          <button type="submit" class="btn btn-secondary pull-right">Save</button>
                        </form>
                      </div>
                      <div class="col-md-4">
                        <div class="card p-3 bg-secondary">
                          <h4 class="text-center text-white">Why should I add achievements?</h4>
                          <p class="text-white">Adding academic achievements, accomplishmants and awards and also certifications with time duration, to show how good you are at doing a job. These accolades will keep you ahead of competition.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                    <div class="row">
                      <div class="col-md-8">
                        <form method="Post" action="#">
                          @csrf
                          <div class="form-group">
                            <label>Add all the diverse skills you have</label>
                            <input type="text" class="form-control" name="name">
                          </div>
                          <button type="submit" class="btn btn-secondary pull-right">Add</button>
                        </form>
                      </div>
                      <div class="col-md-4">
                        <div class="card p-3 bg-secondary">
                          <h4 class="text-center text-white">Why should I add Skills?</h4>
                          <p class="text-white">Recruiters look for a core set of skills and traits when considering applications for both interships and entry-level jobs. Add all relevant skills here to impress recruiters, include your strengths like technical, analytical, observational or communication skills etc.</p>
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
    </div>
  </div>
</div>
@endsection