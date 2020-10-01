@extends('layouts.backend-master')
@section('content')

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Job Listings</h4>
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
            <a href="#">Job Listings</a>
          </li>
        </ul>
      </div>


      <section class="site-section card">
        <div class="container p-3">
          <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <div class="border p-2 d-inline-block mr-3 rounded">
                  <img src="{{asset('front/images/featured-listing-1.jpg')}}" alt="Free Website Template By Free-Template.co">
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
                  <a href="#" class="btn btn-block btn-secondary btn-md">
                    <i class="fas fa-heart"></i> Save
                  Job</a>
                </div>
                <div class="col-6">
                  <a href="{{route('jobseeker.applications.create')}}" class="btn btn-block btn-primary btn-md">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="mb-5">
                <figure class="mb-5"><img src="images/sq_img_1.jpg" alt="Free Website Template by Free-Template.co"
                  class="img-fluid rounded"></figure>
                  <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job
                  Description</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores,
                    commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus.
                  </p>
                  <p>Velit unde aliquam et voluptas reiciendis non sapiente labore, deleniti asperiores blanditiis nihil quia
                    officiis dolor vero iste dolore vel molestiae saepe. Id nisi, consequuntur sunt impedit quidem, vitae
                  mollitia!</p>
                </div>
                <div class="mb-5">
                  <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span
                    class="icon-rocket mr-3"></span>Responsibilities</h3>
                    <ul class="list-unstyled m-0 p-0">
                      <li class="d-flex align-items-start mb-2"><span
                        class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit
                          unde aliquam et voluptas reiciendis n Velit unde aliquam et voluptas reiciendis non sapiente
                        labore</span></li>
                        <li class="d-flex align-items-start mb-2"><span
                          class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
                          <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem
                          ipsum dolor sit amet, consectetur adipisicing elit</span></li>
                          <li class="d-flex align-items-start mb-2"><span
                            class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia
                            officiis dolor</span></li>
                          </ul>
                        </div>

                        <div class="mb-5">
                          <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education +
                          Experience</h3>
                          <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span
                              class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
                              <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit
                              unde aliquam et voluptas reiciendis non sapiente labore</span></li>
                              <li class="d-flex align-items-start mb-2"><span
                                class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
                                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit</span></li>
                                <li class="d-flex align-items-start mb-2"><span
                                  class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia
                                  officiis dolor</span></li>
                                </ul>
                              </div>

                              <div class="mb-5">
                                <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other
                                Benifits</h3>
                                <ul class="list-unstyled m-0 p-0">
                                  <li class="d-flex align-items-start mb-2"><span
                                    class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
                                    <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit
                                    unde aliquam et voluptas reiciendis non sapiente labore</span></li>
                                    <li class="d-flex align-items-start mb-2"><span
                                      class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
                                      <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem
                                      ipsum dolor sit amet, consectetur adipisicing elit</span></li>
                                      <li class="d-flex align-items-start mb-2"><span
                                        class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia
                                        officiis dolor</span></li>
                                      </ul>
                                    </div>


                                  </div>
                                  <div class="col-lg-4">
                                    <div class="bg-light p-3 border rounded mb-4">
                                      <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                                      <ul class="list-unstyled pl-3 mb-0">
                                        <li class="mb-2"><strong class="text-black">Published on:</strong> April 14, 2019</li>
                                        <li class="mb-2"><strong class="text-black">Vacancy:</strong> 20</li>
                                        <li class="mb-2"><strong class="text-black">Employment Status:</strong> Full-time</li>
                                        <li class="mb-2"><strong class="text-black">Experience:</strong> 2 to 3 year(s)</li>
                                        <li class="mb-2"><strong class="text-black">Job Location:</strong> New ork City</li>
                                        <li class="mb-2"><strong class="text-black">Salary:</strong> $60k - $100k</li>
                                        <li class="mb-2"><strong class="text-black">Gender:</strong> Any</li>
                                        <li class="mb-2"><strong class="text-black">Application Deadline:</strong> April 28, 2019</li>
                                      </ul>
                                    </div>

                                    <div class="bg-light p-3 border rounded">
                                      <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                                      <div class="px-3">
                                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="fas fa-facebook"></span></a>
                                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
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