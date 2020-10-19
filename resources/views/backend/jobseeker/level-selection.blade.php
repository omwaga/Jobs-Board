@extends('layouts.career-profile')
@section('content')
<div class="container">
  <div class="content">
    <div class="page-inner">
      <div class="card">
        <h4 class="page-title text-center">Tell Us about yourself</h4> 
        <p class="text-center">Find the right job on careers. You are only a few stepps from millions of jobs.</p>  
        <div class="container">    
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <form method="POST" action="{{route('jobseeker.levels.store')}}">
                @csrf
                <input type="hidden" name="level" value="fresher">
                <div class="card card-stats card-round">
                  <div class="card-body text-center">
                    <div class="icon-big text-center">
                      <i class="fas fa-suitcase"></i>
                    </div>
                    <button class="btn btn-info">I am a Fresher</button>
                    <p class="card-category">I have just graduated/ I haven't worked after graduation</p>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-sm-6 col-md-6">
              <form method="POST" action="{{route('jobseeker.levels.store')}}">
                @csrf
                <input type="hidden" name="level" value="professional">
                <div class="card card-stats card-round">
                  <div class="card-body text-center">
                    <div class="icon-big text-center">
                      <i class="fas fa-suitcase"></i>
                    </div>
                    <button class="btn btn-info"> I am a Professional</button>
                    <p class="card-category">I have at least one month of work experience</p>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <h4>After you register you can:</h4>
          <ul>
            <li>Apply to jobs while keeping your resume hidden from all recruiters</li>
            <li>Mark yourself as a passive jobseeker if you are not actively looking for a job</li>
            <li>Block you company or other specific companies from viewing your profile</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection