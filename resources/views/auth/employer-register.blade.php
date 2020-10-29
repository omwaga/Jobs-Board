
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
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['assets/css/fonts.css']},
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
  <div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn">
      <h3 class="text-center">Employer/Recruiter Sign In </h3>
      <form method="POST" class="login-form" action="{{ route('login') }}">
        @csrf
        <div class="login-form">
          <div class="form-group form-floating-label">
            <input id="username" name="email" type="text" class="form-control input-border-bottom @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="username" class="placeholder">Username</label>
          </div>
          <div class="form-group form-floating-label">
            <input id="password" name="password" type="password" class="form-control input-border-bottom @error('password') is-invalid @enderror" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="password" class="placeholder">Password</label>
            <div class="show-password">
              <i class="flaticon-interface"></i>
            </div>
          </div>
          <div class="row form-sub m-0">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="custom-control-label" for="rememberme">Remember Me</label>
            </div>

            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="link float-right">Forget Password ?</a>
            @endif
          </div>
          <div class="form-action mb-3">
            <button type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button>
          </div>
          <div class="login-account">
            <span class="msg">Don't have an account yet ?</span>
            <a href="#" id="show-signup" class="link">Sign Up</a>
          </div>
        </div>
      </form>
    </div>

    <div class="container container-signup animated fadeIn">
      <h3 class="text-center">Sign Up</h3>
      <form method="POST" action="{{ route('register') }}">
        @csrf
      <div class="login-form">
        <div class="form-group form-floating-label">
          <input id="name" type="text" class="form-control input-border-bottom @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
          <label for="fullname" class="placeholder">Full Name</label>
        </div>
        <div class="form-group form-floating-label">
          <input id="email" type="email" class="form-control input-border-bottom @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
          <label for="email" class="placeholder">Email</label>
        </div>
        <div class="form-group form-floating-label">
          <input id="password" type="password" class="form-control input-border-bottom @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
          <label for="passwordsignin" class="placeholder">Password</label>
          <div class="show-password">
            <i class="flaticon-interface"></i>
          </div>
        </div>
        <div class="form-group form-floating-label">
          <input id="password-confirm" type="password" class="form-control input-border-bottom" name="password_confirmation" required autocomplete="new-password">
          <label for="confirmpassword" class="placeholder">Confirm Password</label>
          <div class="show-password">
            <i class="flaticon-interface"></i>
          </div>
        </div>
        <div class="row form-sub m-0">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="agree" id="agree">
            <label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
          </div>
        </div>
        <div class="form-action">
          <a href="#" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Cancel</a>
          <button type="submit" class="btn btn-primary btn-rounded btn-login">Sign Up</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  <script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}"></script>
  <script src="{{asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/ready.js')}}"></script>
</body>
</html>