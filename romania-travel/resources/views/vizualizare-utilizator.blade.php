<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Articole</title>
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
        <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <style>
    img {
    width: 100%;
    height: 100%
}

.bg-black {
    background: #48c8bf
}

.skill-block {
    width: 30%
}

@media (min-width: 991px) and (max-width:1200px) {
    .skill-block {
        padding: 32px !important
    }
}

@media (min-width: 1200px) {
    .skill-block {
        padding: 56px !important
    }
}

body {
    background-color: #eeeeee
}
    </style>
  </head>
  <body>
    <div class="page">

    @include('layouts.user-nav')
      <!-- Swiper-->

      @foreach($users as $user)
      <div class="container mt-5 mb-5">
          <div class="row no-gutters">
            @if(!empty($user['picture']) AND $user['picture'] != ' ' )
            <div class="col-md-4 col-lg-4"><img src="{{'images/user/'.$user['picture']}}"></div>
                      @else
  <div class="col-md-4 col-lg-4"><img src="images/User/profil.png" ></div>
            @endif


              <div class="col-md-8 col-lg-8">
                  <div class="d-flex flex-column">
                      <div class="d-flex flex-row justify-content-between align-items-center p-5 bg-dark text-white">
                          <h3 class="display-5">{{$user['name']}}</h3>
                      </div>
                      <div class="p-3 bg-black text-white">
                          <h6 style="color: #FFFFFF">Scor: {{$user['scores']}} Puncte</h6>
                      </div>
                      <div class="d-flex flex-row text-white">
                          <div class="p-3 bg-success text-center skill-block">
                              <h4>{{$statistics['userLocations']}}</h4>
                              @if($statistics['userLocations'] > 1)
                              <h6>Locaţii Postate</h6>
                              @elseif($statistics['userLocations'] === 1)
                              <h6>O Locaţie Postată</h6>
                              @else
                              <h6>Locaţii Postate</h6>
                              @endif
                          </div>
                          <div class="p-3 bg-success text-center skill-block">
                              <h4>{{$statistics['userArticles']}}</h4>
                              @if($statistics['userArticles'] > 1)
                              <h6>Artcole Postate</h6>
                              @elseif($statistics['userArticles'] === 1)
                              <h6>Un Articol Postat</h6>
                              @else
                              <h6>Articole Postate</h6>
                              @endif
                          </div>
                          <div class="p-3 bg-warning text-center skill-block">
                              <h4>{{$statistics['userQuestions']}}</h4>
                              @if($statistics['userQuestions'] > 1)
                              <h6>Intrebări Postate</h6>
                              @elseif($statistics['userQuestions'] === 1)
                              <h6>O Intrebare Postată</h6>
                              @else
                              <h6>Intrebări Postate</h6>
                              @endif
                          </div>
                          <div class="p-3 bg-danger text-center skill-block">
                              <h4>{{$statistics['userAnswers']}}</h4>
                              @if($statistics['userAnswers'] > 1)
                              <h6>Răspunsuri de Top</h6>
                              @elseif($statistics['userAnswers'] === 1)
                              <h6>Răspuns de Top</h6>
                              @else
                              <h6>Răspunsuri de Top</h6>
                              @endif
                          </div>


                      </div>
                  </div>
              </div>
          </div>
      </div>
      @endforeach

        @include('layouts.user-footer')
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->

    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
