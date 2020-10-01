
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>

  <!-- Fonts and icons -->
  <script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
  <script>
    WebFont.load({
      google: {"families":["Open+Sans:300,400,600,700"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['{{asset('assets/css/fonts.css')}}']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>
  
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/azzara.min.css')}}">
</head>
<body class="login">
  <div class="container">
    <div class="content">
      <div class="page-inner">
        <h4 class="page-title text-center">Tell Us about yourself</h4> 
        <p class="text-center">Find the right job on careers. You are only a few stepps from millions of jobs.</p>      
        <div class="row">
          <div class="col-sm-6 col-md-5">
            <a href="{{route('jobseeker.fresherProfile')}}">
            <div class="card card-stats card-round">
              <div class="card-body text-center">
                <div class="icon-big text-center">
                  <i class="fas fa-suitcase"></i>
                </div>
                <h4 class="card-title">I am a Fresher</h4>
                <p class="card-category">I have just graduated/ I haven't worked after graduation</p>
              </div>
            </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-5">
            <div class="card card-stats card-round">
              <div class="card-body text-center">
                <div class="icon-big text-center">
                  <i class="fas fa-suitcase"></i>
                </div>
                <h4 class="card-title">I am a Professional</h4>
                <p class="card-category">I have at least one month of work experience</p>
              </div>
            </div>
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
  <script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}"></script>
  <script src="{{asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('  assets/js/ready.js')}}"></script>
</body>
</html>