<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Acasa</title>
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

    <?php echo $__env->make('layouts.user-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
        <div class="swiper-wrapper text-left">
          <div class="swiper-slide context-dark" data-slide-bg="images/banner/banner5.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Articole</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Articolele noastre te vor ajuta să alegi </span><span class="font-weight-bold">vacanţa perfectă!</span></h2><a class="button button-default-outline button-ujarak" href="articole" data-caption-animate="fadeInLeft" data-caption-delay="0">Vezi Articole</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/banner/banner3.jpg">

            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Postări</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Vezi experiențele altor utilizatori</span><span class="font-weight-bold"> din diverse locaţii!</span></h2><a class="button button-default-outline button-ujarak" href="recenzii-locatii" data-caption-animate="fadeInLeft" data-caption-delay="0">Vezi Postări</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/banner/banner1.jpg">

            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Întrebări și Răspunsuri</h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Ai nelămuriri despre o locație? Ne poţi adresa oricând o </span><span class="font-weight-bold">întrebare!</span></h2><a class="button button-default-outline button-ujarak" href="intrebari" data-caption-animate="fadeInLeft" data-caption-delay="0">Adaugă Întrebare</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
      </section>
      <!-- Section Box Categories-->
      <section class="section section-lg section-top-1 bg-gray-4">
        <div class="container offset-negative-1">
          <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
              <div class="row justify-content-center">
                  <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="continut-articol-<?php echo e($article->id); ?>"><img src="<?php echo e('Images/Article/'.$article->image); ?>" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title"><a href="continut-articol-<?php echo e($article->id); ?>"><?php echo e($article->title); ?></a></h5>
                    </li>
                  </ul>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div><a class="link-classic wow fadeInUp" href="articole">Toate articolele<span></span></a>
          <!-- Owl Carousel-->
        </div>
      </section>
      <!-- Discover New Horizons-->
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
                      <p>Platforma Web "Romania-Travel" a fost concepută din dorinţa de a promova turismul românesc, ce are atât de mult potențial. Cu ajutorul platformei utilizatorii pot vedea articole ce au legătură directă cu turismul, postările altor utilizatori din diverse locații și pot adresa diverse întrebări, desigur, tot din domeniul turistic.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-7-2">
                      <p>Ne dorim să creăm o comunitate cât mai unita unde toate persoanele ce au pasiunea călătoritului să redescopere pasiunea călătoritolui in Romȃnia. Misiunea noastră este promovarea turismului românesc prin prezentarea locațiilor inedite atât prin intermediul articolelor cât și prin intermediul postărilor trimise de către utilizatori.</p>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--	Our Services-->
      <section class="section section-sm">
        <div class="container">
          <h3>De ce să accesezi platforma noastră?</h3>
          <div class="row row-30">
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <p style="font-size: 35px; color: #01b3a7"><i class="fa fa-newspaper-o" aria-hidden="true"></i></p>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="articole">Articole</a></h5>
                    <p class="box-icon-classic-text">Este bine să fii informat, aici găsești articole din diverse domenii, pentru o călătorie excelentă.</p><br>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <p style="font-size: 35px; color: #01b3a7"><i class="fa fa-map" aria-hidden="true"></i></p>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="recenzii-locatii">Postări</a></h5>
                    <p class="box-icon-classic-text">Poți adauga o nouă postare despre ultima locație vizitată sau te poți inspira din postările altor utilizatori.</p><br>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <p style="font-size: 35px; color: #01b3a7"><i class="fa fa-question" aria-hidden="true"></i></p>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="intrebari">Întrebări</a></h5>
                    <p class="box-icon-classic-text">Ai nelămuriri in ceea ce priveste o locație? Poți adresa o întrebare comunității, cu siguranță vei fi ajutat. </p>
                  </div>
                </div>
              </article>
            </div>

          </div>
        </div>
      </section>
      <!-- Hot tours-->
      <section class="section section-sm bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Ultimele Postări Adăugate</span></h3>
          <div class="row row-sm row-40 row-md-50">
              <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-md-12 wow fadeInRight">
              <!-- Product Big-->
              <article class="product-big">
                <div class="unit flex-column flex-md-row align-items-md-stretch">
                  <div class="unit-left"><a class="product-big-figure" href="#"><img src="<?php echo e('images/Post/'.$location -> image); ?>" alt="" width="600" height="366"/></a></div>
                  <div class="unit-body">
                    <div class="product-big-body">
                      <h5 class="product-big-title"><a href="<?php echo e('continut-postare-'.$location -> id); ?>"><?php echo e($location -> title); ?></a></h5>
                        <h6 ><a href="#"><em>Autor postare: <?php echo e($location -> userName); ?></em></a></h6>
                      <p class="product-big-text"><?php echo e(substr($location->description,0,100).'...'); ?></p>
                      <a class="button button-black-outline button-ujarak" href="<?php echo e('continut-postare-'.$location -> id); ?>">Vezi Postarea</a>

                    </div>
                  </div>
                </div>
              </article>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        </div>
      </section>

      <div class="container">
<br>
        <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Statistici de privit pe plajă</span></h3>
        <br>
      </div>
      <section class="section ">

              <div class="parallax-container" data-parallax-img="images/index/booking1.jpg">
          <div class="parallax-content section-xl context-dark bg-overlay-26">
            <div class="container">
              <div class="row row-50 justify-content-center border-classic">
                <div class="col-sm-6 col-md-5 col-lg-2">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter"><?php echo e($statistics['users']); ?></span>
                    </div>
                    <h5 class="counter-classic-title">Utilizatori</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-2">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter"><?php echo e($statistics['locations']); ?></span>
                    </div>
                    <h5 class="counter-classic-title">Postări</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-2">
                  <div class="counter-classic">
                              <div class="counter-classic-number"><span class="counter"><?php echo e($statistics['articles']); ?></span>
                    </div>
                    <h5 class="counter-classic-title">Articole</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-2">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter"><?php echo e($statistics['questions']); ?></span>
                    </div>
                    <h5 class="counter-classic-title">Întrebari</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-2">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter"><?php echo e($statistics['answers']); ?></span>
                    </div>
                    <h5 class="counter-classic-title">Răspunsuri</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Different People-->
      <section class="section section-sm">
        <div class="container">
          <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Topul utilizatorilor</span></h3>
          <div class="row row-30 justify-content-center box-ordered">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Team Modern-->
              <article class="team-modern">
                <?php if(!empty($user['picture']) AND $user['picture'] != ' ' ): ?>
                <div class="team-modern-header"><a class="team-modern-figure" href="<?php echo e('vizualizare-utilizator-'.$user['id']); ?>"><img class="img-circles" src="<?php echo e('Images/User/'.$user['picture']); ?>" alt="" width="118" height="118"/></a>
                  <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                </div>
                          <?php else: ?>
                          <div class="team-modern-header"><a class="team-modern-figure" href="<?php echo e('vizualizare-utilizator-'.$user['id']); ?>"><img class="img-circles" src="images/User/profil.png" alt="" width="118" height="118"/></a>
                            <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                              <g>
                                <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                              </g>
                            </svg>
                          </div>
                <?php endif; ?>

                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="<?php echo e('vizualizare-utilizator-'.$user['id']); ?>"><?php echo e($user['name']); ?></a></h6>
                    <p class="team-modern-status">Scor: <b><?php echo e($user['scores']); ?></b> puncte</p>
                </div>
              </article>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        </div>
      </section>
      <!-- Section Subscribe-->
      <section class="section bg-default text-center offset-top-50">
        <div class="parallax-container" data-parallax-img="images/index/booking4.jpg">
          <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
            <div class="container">
              <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">Alege cazarea perfectă</span><span class="d-block font-weight-light">pentru tine</span></h2>
              <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">Alege din mii de unități de cazare disponibile pe Booking</p><a class="button button-secondary button-pipaluk" href="https://www.booking.com/" target="_blank">Rezervă Acum!</a>
            </div>
          </div>
        </div>
      </section>
      <!--	Instagrram wondertour-->
      <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
        <div class="container-fluid">
          <h6 class="gallery-title">Galerie</h6>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
            <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="owl-item">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary">
                <div class="thumbnail-mary-figure"><img src="<?php echo e('Images/Post/'.$gallery['image']); ?>" alt="" width="420" height="308"/>
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo e('Images/Post/'.$gallery['image']); ?>" data-lightgallery="item"><img src="images/gallery-image-16-420x308.jpg" alt="" width="420" height="308"/></a>
                </div>
              </article>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </section>

        <?php echo $__env->make('layouts.user-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script>
   var msg = '<?php echo e(Session::get('mesajAdaugat')); ?>';
   var exist = '<?php echo e(Session::has('mesajAdaugat')); ?>';
   if(exist){
     alert(msg);
   }
  </script>
  <script>
 var msg = '<?php echo e(Session::get('eroare')); ?>';
 var exist = '<?php echo e(Session::has('eroare')); ?>';
 if(exist){
   alert(msg);
 }
</script>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\romania-travel\resources\views/welcome.blade.php ENDPATH**/ ?>