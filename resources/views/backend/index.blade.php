@extends('layouts.backend-master')
@section('content')
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body ">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div class="icon-big text-center icon-primary bubble-shadow-small">
                    <i class="fas fa-users"></i>
                  </div>
                </div>
                <div class="col col-stats ml-3 ml-sm-0">
                  <div class="numbers">
                    <p class="card-category">Job Postings</p>
                    @if(Auth::user()->hasRole('admin'))
                    <h4 class="card-title">1,294</h4>
                    @else                    
                    <h4 class="card-title">{{auth()->user()->vacancies->count()}}</h4>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div class="icon-big text-center icon-info bubble-shadow-small">
                    <i class="far fa-newspaper"></i>
                  </div>
                </div>
                <div class="col col-stats ml-3 ml-sm-0">
                  <div class="numbers">
                    <p class="card-category">Applications</p>
                    @if(Auth::user()->hasRole('admin'))
                    <h4 class="card-title">1,294</h4>
                    @else                    
                    <h4 class="card-title">{{auth()->user()->applications->count()}}</h4>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div class="icon-big text-center icon-success bubble-shadow-small">
                    <i class="far fa-chart-bar"></i>
                  </div>
                </div>
                <div class="col col-stats ml-3 ml-sm-0">
                  <div class="numbers">
                    <p class="card-category">Pools</p>
                    @if(Auth::user()->hasRole('admin'))
                    <h4 class="card-title">1,294</h4>
                    @else                    
                    <h4 class="card-title">{{auth()->user()->pools->count()}}</h4>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-icon">
                  <div class="icon-big text-center icon-secondary bubble-shadow-small">
                    <i class="far fa-check-circle"></i>
                  </div>
                </div>
                <div class="col col-stats ml-3 ml-sm-0">
                  <div class="numbers">
                    <p class="card-category">Team</p>
                    <h4 class="card-title">576</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pricing -->
      <h4 class="page-title text-center">Quick & Easy Job Posting − Get Quality Applies</h4>
      <div class="row justify-content-center align-items-center">
        <div class="col-md-3 pl-md-0">
          <div class="card card-pricing">
            <div class="card-header">
              <h4 class="card-title">Starter Pack</h4>
              <div class="card-price">
                <!-- <span class="price">Ksh0</span> -->
                <span class="text">Free</span>
              </div>
            </div>
            <div class="card-body">
              <ul class="specification-list">
                <li>
                  <span class="name-specification">Job Postings</span>
                  <span class="status-specification">Yes</span>
                </li>
                <li>
                  <span class="name-specification">Applications Management</span>
                  <span class="status-specification">No</span>
                </li>
                <li>
                  <span class="name-specification">Talent Pools</span>
                  <span class="status-specification">14 days trial</span>
                </li>
              </ul>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary btn-block"><b>Get Started</b></button>
            </div>
          </div>
        </div>
        <div class="col-md-3 pl-md-0 pr-md-0">
          <div class="card card-pricing card-pricing-focus card-primary">
            <div class="card-header">
              <h4 class="card-title">Basic</h4>
              <div class="card-price">
                <span class="price">Ksh 15000</span>
                <span class="text">/mo</span>
              </div>
            </div>
            <div class="card-body">
              <ul class="specification-list">
                <li>
                  <span class="name-specification">Job Postings</span>
                  <span class="status-specification">Yes</span>
                </li>
                <li>
                  <span class="name-specification">Applications Management</span>
                  <span class="status-specification">No</span>
                </li>
                <li>
                  <span class="name-specification">Talent Pools</span>
                  <span class="status-specification">14 days trial</span>
                </li>
              </ul>
            </div>
            <div class="card-footer">
              <button class="btn btn-light btn-block"><b>Get Started</b></button>
            </div>
          </div>
        </div>
        <div class="col-md-3 pr-md-0">
          <div class="card card-pricing">
            <div class="card-header">
              <h4 class="card-title">Premium</h4>
              <div class="card-price">
                <span class="price">Ksh 25000</span>
                <span class="text">/mo</span>
              </div>
            </div>
            <div class="card-body">
              <ul class="specification-list">
                <li>
                  <span class="name-specification">Job Postings</span>
                  <span class="status-specification">Yes</span>
                </li>
                <li>
                  <span class="name-specification">Applications Management</span>
                  <span class="status-specification">No</span>
                </li>
                <li>
                  <span class="name-specification">Talent Pools</span>
                  <span class="status-specification">14 days trial</span>
                </li>
              </ul>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary btn-block"><b>Get Started</b></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection