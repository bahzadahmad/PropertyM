<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Haninge Islamiska Kulturcentret</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('public/asset/css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('public/asset/css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('public/asset/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('public/asset/css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('public/asset/css/app-dark.css') }}" id="darkTheme" disabled>
  </head>
  <body class="light ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100 m-0">
        <form method="POST" action="{{ route('login') }}" class="col-lg-3 col-md-4 col-10 mx-auto text-center">
            @csrf  
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="#">
          <p style="text-align: center;"><img src="{{ asset('public/asset/assets/images/logo.png') }}" style="max-width:180px; margin-bottom:10px"/></p>
          </a>
          <h1 class="h6 mb-3">Sign in</h1>
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input id="email" type="email" placeholder="info@gmail.com" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          </div>
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input id="password" type="password" placeholder="**************" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          </div>
          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Stay logged in </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
          <p class="mt-5 mb-3 text-muted">© {{date('Y')}}</p>
        </form>
      </div>
    </div>
    <script src="{{ asset('public/asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('public/asset/js/jquery.stickOnScroll.js') }}"></script>
    <script src="{{ asset('public/asset/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('public/asset/js/config.js') }}"></script>
    <script src="{{ asset('public/asset/js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
</body>
</html>