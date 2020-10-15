@extends('layouts.backend-master')
@section('content')
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
        <div class="btn-group btn-group-page-header ml-auto">
          <button type="button" class="btn btn-light btn-round btn-page-header-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-h"></i>
          </button>
          <div class="dropdown-menu">
            <div class="arrow"></div>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
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
                    <p class="card-category">Visitors</p>
                    <h4 class="card-title">1,294</h4>
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
                    <p class="card-category">Subscribers</p>
                    <h4 class="card-title">1303</h4>
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
                    <p class="card-category">Sales</p>
                    <h4 class="card-title">$ 1,345</h4>
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
                    <p class="card-category">Order</p>
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
                  <h4 class="card-title">Basic</h4>
                  <div class="card-price">
                    <span class="price">$25</span>
                    <span class="text">/mo</span>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="specification-list">
                    <li>
                      <span class="name-specification">Customizer</span>
                      <span class="status-specification">14 days trial</span>
                    </li>
                    <li>
                      <span class="name-specification">Chat History</span>
                      <span class="status-specification">No</span>
                    </li>
                    <li>
                      <span class="name-specification">Statistics</span>
                      <span class="status-specification">14 days trial</span>
                    </li>
                    <li>
                      <span class="name-specification">Support</span>
                      <span class="status-specification">Yes</span>
                    </li>
                    <li>
                      <span class="name-specification">Live Support</span>
                      <span class="status-specification">No</span>
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
                  <h4 class="card-title">Professional</h4>
                  <div class="card-price">
                    <span class="price">$35</span>
                    <span class="text">/mo</span>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="specification-list">
                    <li>
                      <span class="name-specification">Customizer</span>
                      <span class="status-specification">Yes</span>
                    </li>
                    <li>
                      <span class="name-specification">Chat History</span>
                      <span class="status-specification">3 Month</span>
                    </li>
                    <li>
                      <span class="name-specification">Statistics</span>
                      <span class="status-specification">3 Month</span>
                    </li>
                    <li>
                      <span class="name-specification">Support</span>
                      <span class="status-specification">Yes</span>
                    </li>
                    <li>
                      <span class="name-specification">Live Support</span>
                      <span class="status-specification">Yes</span>
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
                  <h4 class="card-title">Team</h4>
                  <div class="card-price">
                    <span class="price">$75</span>
                    <span class="text">/mo</span>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="specification-list">
                    <li>
                      <span class="name-specification">Customizer</span>
                      <span class="status-specification">Yes</span>
                    </li>
                    <li>
                      <span class="name-specification">Chat History</span>
                      <span class="status-specification">1 Year</span>
                    </li>
                    <li>
                      <span class="name-specification">Statistics</span>
                      <span class="status-specification">1 Year</span>
                    </li>
                    <li>
                      <span class="name-specification">Support</span>
                      <span class="status-specification">Yes</span>
                    </li>
                    <li>
                      <span class="name-specification">Live Support</span>
                      <span class="status-specification">Yes</span>
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