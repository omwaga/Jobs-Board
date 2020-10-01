
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
        <h4 class="page-title text-center">Welcome {{auth()->user()->name ?? ''}},</h4>

        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Welcome {{auth()->user()->name ?? ''}}, Your profile is your first impression, follow the instructions and fill the details.</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-5 col-md-2">
                  <div class="nav flex-column nav-pills nav-secondary nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                      <i class="flaticon-user-4"></i>
                      Personal & Professional Details
                    </a>
                    <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                      <i class="flaticon-user-4"></i>
                      Education Details
                    </a>
                    <a class="nav-link active" id="v-pills-home-tab-icons" data-toggle="pill" href="#v-pills-home-icons" role="tab" aria-controls="v-pills-home-icons" aria-selected="true">
                      <i class="flaticon-home"></i>
                      Internships
                    </a>
                    <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                      <i class="flaticon-user-4"></i>
                      Projects
                    </a>
                    <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                      <i class="flaticon-user-4"></i>
                      Work Experience
                    </a>
                    <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                      <i class="flaticon-user-4"></i>
                      Achievements
                    </a>
                    <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                      <i class="flaticon-user-4"></i>
                      Skills
                    </a>
                  </div>
                </div>
                <div class="col-7 col-md-10">
                  <div class="tab-content" id="v-pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                      <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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