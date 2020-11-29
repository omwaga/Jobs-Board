@extends('layouts.front')
@section('content')
@include('front.banner')
<section class="ftco-section ftco-candidates ftco-candidates-2 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 team d-md-flex p-4 bg-white" align="center">
                    <div class="text">
                        <h2>I'M AN EMPLOYEE</h2>
                        <p class="mb-2">
                            Recruitable portal offers thousands of job offers in many industries, it also deals with job placement and training organization. It also allows you to leave opinions about employers and creates a space where you can find more information about the future workplace.
                        </p>
                        <p><a href="{{route('front.jobseeker.register')}}" class="btn btn-primary">Register</a></p>
                    </div> 
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 team d-md-flex p-4 bg-white" align="center">
                    <div class="text">
                        <h2>I AM AN EMPLOYER</h2>
                        <p class="mb-2">
                            Recruitable portal allows employers to add personalized job offers and create an individual profile, thanks to which you can promote your company with news and respond to user comments.
                        </p>
                        <p><a href="{{route('front.employer.register')}}" class="btn btn-primary">Register</a></p>
                    </div> 
            </div>
        </div>
    </div>
</section>
@endsection
