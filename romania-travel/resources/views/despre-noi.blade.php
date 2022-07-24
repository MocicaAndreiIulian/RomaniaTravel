<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Despre noi</title>
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
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-lg-6 text-center wow fadeInUp"><img src="images/index/redescoperaromania.jpg" alt="" width="556" height="382"/>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
              <div class="box-width-lg-470">
                <h3>Redescoperă România</h3>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                  <!-- Nav tabs-->
                  <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1" data-toggle="tab">Despre noi.</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2" data-toggle="tab">Care este misiunea noastră.</a></li>
                  </ul>
                  <!-- Tab panes-->
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-7-1">
                      <p>Platforma Web "Romania-Travel" a fost concepută din dorința de a promova turismul românesc, ce are atât de mult potențial. Cu ajutorul platformei utilizatorii pot vedea articole ce au legătură directă cu turismul, postările altor utilizatori din diverse locații și pot adresa diverse întrebări, desigur, tot din domeniul turistic.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-7-2">
                      <p>Ne dorim să creăm o comunitate cât mai unita unde toate persoanele ce au pasiunea călătoritului să redescopere pasiunea călătoritolui in România. Misiunea noastră este promovarea turismului românesc prin prezentarea locațiilor inedite atât prin intermediul articolelor cât și prin intermediul postărilor trimise de către utilizatori.</p>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        @include('layouts.user-footer')
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
