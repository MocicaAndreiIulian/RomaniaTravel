<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Resetare Parola</title>
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
      <div class="container">
      <div class="row row-30 justify-content-center">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Resetare Parola</h3>
            </div>
            <div class="title-classic-text">
              <p>Daca aţi uitat parola completaţi formularul de mai jos</p>
            </div>
            </div>
            </div>
      <!-- Contact information-->
      <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-6">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="tel:+40 722 564 468">+40 722 564 468</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-6">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:contact@romania-travel.ro">contact@romania-travel.ro</a></p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Form-->
      <section class="section section-sm section-last bg-default text-left">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Formular schimbare parola</h3>
            </div>
          </article>
          <form method="post" action="sendMessage2">
            @csrf
            <div class="row row-14 gutters-14">

              <div class="col-md-6">
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" name="email" required=""  oninvalid="this.setCustomValidity('Camp necompletat!')" oninput="setCustomValidity('')">
                  <label class="form-label" for="contact-email-2">E-mail(cel folosit pentru crearea contului)</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" name="phone" required=""  oninvalid="this.setCustomValidity('Camp necompletat!')" oninput="setCustomValidity('')">
                  <label class="form-label" for="contact-phone-2">Telefon</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message-2">Mesaj</label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message" required=""  oninvalid="this.setCustomValidity('Camp necompletat!')" oninput="setCustomValidity('')"></textarea>
                </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Trimite Mesajul</button>
          </form>
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
