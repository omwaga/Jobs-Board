<!doctype html>
<html lang="en">
  <head>
    <title>Careers &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('front/css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/fonts/line-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">    
  </head>
  <body id="top">


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.html">Careers</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="{{route('front.home')}}" class="nav-link active">Home</a></li>
              <li><a href="{{route('front.vacancies')}}">Job Listings</a></li>
              <li><a href="{{route('front.vacancies')}}">Fresher Jobs</a></li>
              <li><a href="#">Career Blog</a></li>
              <li><a href="{{route('login')}}">Login/Register</a></li>
              <li class="d-lg-none"><a href="contact.html">Contact Us</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="contact.html" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-paper-plane"></span>Post a Job</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

@yield('content')


    
    <footer class="site-footer">

      
      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">Web Developers</a></li>
              <li><a href="#">Python</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
                class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
  
  </div>

    <!-- SCRIPTS -->
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('front/js/stickyfill.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.easing.1.3.js')}}"></script>
    
    <script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    
    <script src="{{asset('front/js/custom.js')}}"></script>

     
  </body>
</html>