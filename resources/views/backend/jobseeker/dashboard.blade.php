@extends('layouts.backend-master')
@section('content')<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Welcome back, {{auth()->user()->name}}</h4>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-icon">
                    <div class="icon-big text-center icon-info bubble-shadow-small">
                      <i class="far fa-newspaper"></i>
                    </div>
                  </div>
                  <h4> Upload Resume/CV and Cover Letter</h4>
                </div>
                <form method="POST" action="{{route('jobseeker.documents.store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label class="control-label">Document Name <span class="required text-danger">*</span></label>
                    <input class="form-control" name="name" type="text" value="{{old('name')}}" />
                  </div>
                  <div class="form-group">
                    <label class="control-label">File to Upload<span class="required text-danger">*</span></label>
                    <input class="form-control" name="document_file" type="file" value="{{old('document_file')}}" />
                  </div>
                  <button class="btn btn-secondary float-right">Save</button>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <h4>Update Career Level</h4>
                    <form method="POST" action="{{route('jobseeker.levels.update', auth()->user()->id)}}">
                      @csrf
                      @method('PATCH')
                      <div class="form-check">
                        <label class="form-radio-label">
                          <input class="form-radio-input" type="radio" name="level" value="fresher" @if($level = "fresher") checked @endif>
                          <span class="form-radio-sign">I am a fresher</span>
                        </label>
                        <label class="form-radio-label">
                          <input class="form-radio-input" type="radio" name="level" value="professional" @if($level = "professional") checked @endif>
                          <span class="form-radio-sign">I am a professional</span>
                        </label>
                      </div>
                    <button type="submit" class="btn btn-secondary">Update Level</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <h4>Invite Friends</h4>
                    <p>Add multiple email ids separated by comma(,)</p>
                    <a href="#" class="btn btn-secondary">Send Invite</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="card card-stats card-round">
              <div class="card-body">
                <h4>Personalized Interview Answers</h4>
                <p>Based on your profile we have created your personalized answers to most common interview questions</p>
                <a href="#" class="btn btn-secondary">View Interview Answers</a>
              </div>
            </div>
            <div class="card card-stats card-round">
              <div class="card-body">
                <h4>Resume Writing</h4>
                <p>Give a strong start to your career, get our experts to write your resume !</p>
                <a href="#" class="btn btn-secondary">Know More</a>
              </div>
            </div>
            <div class="card card-stats card-round">
              <div class="card-body">
                <h4>Notification & Mailer Settings</h4>
                <p>Give a strong start to your career, get our experts to write your resume !</p>
                <a href="#" class="btn btn-secondary">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
