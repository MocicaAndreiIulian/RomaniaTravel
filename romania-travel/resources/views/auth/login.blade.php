<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Recenzii locatii</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="page">

    @include('layouts.user-nav')
      <!-- Swiper-->
  <br><br>  <br><br>  <br><br>

      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header"><b>{{ __('Conectare') }}</b></div>

                      <div class="card-body">
                          <form method="POST" action="{{ route('login') }}">
                              @csrf

                              <div class="row mb-3">
                                  <label for="email" class="col-md-4 col-form-label text-md-end"><b>{{ __('Adresa de Email') }}:</b></label>

                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus oninvalid="this.setCustomValidity('Camp necompletat!')" oninput="setCustomValidity('')">

                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>Date incorecte</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <label for="password" class="col-md-4 col-form-label text-md-end"><b>{{ __('Parola') }}:</b></label>

                                  <div class="col-md-6">
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" oninvalid="this.setCustomValidity('Camp necompletat!')" oninput="setCustomValidity('')">

                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>



                              <div class="row mb-0">
                                  <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Conectare') }}
                                      </button>

                                      @if (Route::has('password.request'))
                                          <a class="btn btn-link" href="resetpass">
                                              {{ __('Ai uitat parola?') }}
                                          </a>
                                      @endif
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <br><br>  <br><br>  <br><br>
        @include('layouts.user-footer')
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
