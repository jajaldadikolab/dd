
<html lang="en"><head>
    <title>Admin Toko Alat Musik</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets')}}/dist/css/adminx.css" media="screen">
  </head>
  <body>
    <div class="adminx-container d-flex justify-content-center align-items-center">
      <div class="page-login">
        <div class="text-center">
          <a class="navbar-brand mb-4 h1" href="login.html">
            <img src="{{asset('admin/assets')}}/demo/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
            Admin Toko Alat Musik
          </a>
        </div>

        <div class="card mb-0">
          <div class="card-body">
            
            
          </div>
          
          <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
                        @csrf
              <div class="form-group">
                <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                <input id="exampleDropdownFormEmail1" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email@example.com">
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                <input id="exampleDropdownFormPassword1" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" name="remember" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
                  <label class="custom-control-label" for="customCheck1">Remember me</label>
                </div>
              </div>
              <button type="submit" class="btn btn-sm btn-block btn-primary">{{ __('Login') }}</button>
            </form>
          </div>

        </div>
      </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="{{asset('admin/assets')}}/dist/js/vendor.js"></script>
    <script src="{{asset('admin/assets')}}/dist/js/adminx.js"></script>


  
</body></html>