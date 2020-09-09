@extends('layouts.front')
@section('content')
@include('front.banner')
<section class="ftco-section ftco-candidates ftco-candidates-2 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 team d-md-flex p-4 bg-white" align="center">
                    <div class="text">
                        <h2>Jobseekers</h2>
                        <p class="mb-2">Are you looking for your dream job?
                        Create a unique career profile with BrighterMonday</p>
                        <p><a href="{{route('front.jobseeker.register')}}" class="btn btn-primary">Register</a></p>
                    </div> 
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 team d-md-flex p-4 bg-white" align="center">
                    <div class="text">
                        <h2>Employers</h2>
                        <p class="mb-2">Are you looking for your dream job?
                        Create a unique career profile with BrighterMonday</p>
                        <p><a href="{{route('front.employer.register')}}" class="btn btn-primary">Register</a></p>
                    </div> 
            </div>
        </div>
    </div>
</section>
@endsection
