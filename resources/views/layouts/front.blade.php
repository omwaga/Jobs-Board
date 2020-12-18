<!DOCTYPE html>
<html lang="en">
<head>
  {!! SEOMeta::generate() !!}
  {!! OpenGraph::generate() !!}
<meta name="robots" content="INDEX,FOLLOW">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/images/logo.png')}}" />
  
  
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MCZMF64');</script>
<!-- End Google Tag Manager -->

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('front/css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/aos.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/ionicons.min.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/bootstrap-datepicker.css')}}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>


  <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/icomoon.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
  
  <script data-ad-client="ca-pub-3474881270337873" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BNE9WYWF1B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BNE9WYWF1B');
</script>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCZMF64"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  @include('sweetalert::alert')

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
          <li class="nav-item"><a href="{{route('front.interviews')}}" class="nav-link">Interview Q&A</a></li>
          <!-- <li class="nav-item"><a href="#" class="nav-link">Resume Maker</a></li> -->
          <!-- <li class="nav-item"><a href="#" class="nav-link">Career Guidance</a></li> -->
          <li class="nav-item"><a href="{{route('front.blog')}}" class="nav-link">Blog</a></li>
          <!-- Authentication Links -->
          @guest
          <li class="nav-item cta mr-md-2"><a href="{{route('front.employer.register')}}" class="nav-link">Post a Job</a></li>
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
          <h2>Recruitable JobSpeak</h2>
          <p>Get monthly Job Index that provides insights into hiring trends in your city, job function, job category and industry.</p>
          <div class="row d-flex justify-content-center mt-4 mb-4">
            <div class="col-md-8">
              <form action="{{route('front.emails.store')}}" method="POST" class="subscribe-form">
                @csrf
                <div class="form-group d-flex">
                  <input type="email" name="email" class="form-control" placeholder="Enter email address">
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
        <p>Recruitable is a kenyan online employment solution for people seeking jobs and the employers who need great people.</p>
        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Employers Services</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">How it works</a></li>
          <li><a href="{{route('front.employer.register')}}" class="py-2 d-block">Recruiter Register</a></li>
          <li><a href="{{route('front.employer.register')}}" class="py-2 d-block">Job Posting </a></li>
          <!-- <li><a href="#" class="py-2 d-block">Advance Skill Search</a></li> -->
          <li><a href="{{route('front.employer.register')}}" class="py-2 d-block">Recruiting Service</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4 ml-md-4">
        <h2 class="ftco-heading-2">Jobseekers Seervices</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Priority Applicant</a></li>
          <li><a href="{{route('register')}}" class="py-2 d-block">Register</a></li>
          <li><a href="{{route('login')}}" class="py-2 d-block">Post Your Skills</a></li>
          <li><a href="{{route('front.vacancies')}}" class="py-2 d-block">Job Search</a></li>
          <li><a href="{{route('login')}}" class="py-2 d-block">Resume Display</a></li>
          <li><a href="{{route('login')}}" class="py-2 d-block">Create Job Alerts</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Have a Questions?</h2>
        <div class="block-23 mb-3">
          <ul>
            <li><span class="icon icon-map-marker"></span><span class="text">Nairobi Kenya</span></li>
            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+254 713 577 210</span></a></li>
            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@recruitable.co.ke</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">

      <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
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


<script type="text/javascript">
  $("img").lazyload({
      effect : "fadeIn"
  });
</script>

</body>
</html>