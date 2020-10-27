
<!DOCTYPE html>
<html lang="en">
<head>
  <title>JobPortal - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('front/css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/aos.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/ionicons.min.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/bootstrap-datepicker.css')}}">


  <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/icomoon.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{asset('assets/img/logo.png')}}" alt="navbar brand" class="navbar-brand" height="50px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{route('front.vacancies')}}" class="nav-link">Job Listings</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
          <!-- Authentication Links -->
          @guest
          @if (Route::has('register'))                                
          <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Register</a></li>
          @endif

          <li class="nav-item cta mr-md-2"><a href="{{route('front.post')}}" class="nav-link">Post a Job</a></li>
          <li class="nav-item cta cta-colored"><a href="{{route('login')}}" class="nav-link">Want a Job</a></li>
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              @can('view-admin-dashboard')
              <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                {{ __('My Dashboard') }}
              </a> 
              @endcan
              @can('view-user-dashboard')
              <a class="dropdown-item" href="{{ route('jobseeker.home') }}">
                {{ __('My Dashboard') }}
              </a> 
              @endcan
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->

@yield('content')



<section class="ftco-section-parallax">
  <div class="parallax-img d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <h2>Subcribe to our Newsletter</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          <div class="row d-flex justify-content-center mt-4 mb-4">
            <div class="col-md-8">
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
       <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">About</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Employers</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">How it works</a></li>
          <li><a href="#" class="py-2 d-block">Register</a></li>
          <li><a href="#" class="py-2 d-block">Post a Job</a></li>
          <li><a href="#" class="py-2 d-block">Advance Skill Search</a></li>
          <li><a href="#" class="py-2 d-block">Recruiting Service</a></li>
          <li><a href="#" class="py-2 d-block">Blog</a></li>
          <li><a href="#" class="py-2 d-block">Faq</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4 ml-md-4">
        <h2 class="ftco-heading-2">Workers</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">How it works</a></li>
          <li><a href="#" class="py-2 d-block">Register</a></li>
          <li><a href="#" class="py-2 d-block">Post Your Skills</a></li>
          <li><a href="#" class="py-2 d-block">Job Search</a></li>
          <li><a href="#" class="py-2 d-block">Emploer Search</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Have a Questions?</h2>
        <div class="block-23 mb-3">
          <ul>
            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">

      <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
    </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('front/js/popper.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('front/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/js/aos.js')}}"></script>
<script src="{{asset('front/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('front/js/scrollax.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>

</body>
</html>