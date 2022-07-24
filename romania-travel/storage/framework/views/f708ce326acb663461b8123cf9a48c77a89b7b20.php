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

    <?php echo $__env->make('layouts.user-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Swiper-->

      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="container mt-5 mb-5">
          <div class="row no-gutters">
            <?php if(!empty($user['picture']) AND $user['picture'] != ' ' ): ?>
            <div class="col-md-4 col-lg-4"><img src="<?php echo e('images/user/'.$user['picture']); ?>"></div>
                      <?php else: ?>
  <div class="col-md-4 col-lg-4"><img src="images/User/profil.png" ></div>
            <?php endif; ?>


              <div class="col-md-8 col-lg-8">
                  <div class="d-flex flex-column">
                      <div class="d-flex flex-row justify-content-between align-items-center p-5 bg-dark text-white">
                          <h3 class="display-5"><?php echo e($user['name']); ?></h3>
                      </div>
                      <div class="p-3 bg-black text-white">
                          <h6 style="color: #FFFFFF">Scor: <?php echo e($user['scores']); ?> Puncte</h6>
                      </div>
                      <div class="d-flex flex-row text-white">
                          <div class="p-3 bg-success text-center skill-block">
                              <h4><?php echo e($statistics['userLocations']); ?></h4>
                              <?php if($statistics['userLocations'] > 1): ?>
                              <h6>Locatii Postate</h6>
                              <?php elseif($statistics['userLocations'] === 1): ?>
                              <h6>O Locatie Postata</h6>
                              <?php else: ?>
                              <h6>Locatii Postate</h6>
                              <?php endif; ?>
                          </div>
                          <div class="p-3 bg-success text-center skill-block">
                              <h4><?php echo e($statistics['userArticles']); ?></h4>
                              <?php if($statistics['userArticles'] > 1): ?>
                              <h6>Artcole Postate</h6>
                              <?php elseif($statistics['userArticles'] === 1): ?>
                              <h6>Un Articol Postat</h6>
                              <?php else: ?>
                              <h6>Articole Postate</h6>
                              <?php endif; ?>
                          </div>
                          <div class="p-3 bg-warning text-center skill-block">
                              <h4><?php echo e($statistics['userQuestions']); ?></h4>
                              <?php if($statistics['userQuestions'] > 1): ?>
                              <h6>Intrebari Postate</h6>
                              <?php elseif($statistics['userQuestions'] === 1): ?>
                              <h6>O Intrebare Postata</h6>
                              <?php else: ?>
                              <h6>Intrebari Postate</h6>
                              <?php endif; ?>
                          </div>
                          <div class="p-3 bg-danger text-center skill-block">
                              <h4><?php echo e($statistics['userAnswers']); ?></h4>
                              <?php if($statistics['userAnswers'] > 1): ?>
                              <h6>Raspunsuri de Top</h6>
                              <?php elseif($statistics['userAnswers'] === 1): ?>
                              <h6>Raspuns de Top</h6>
                              <?php else: ?>
                              <h6>Raspunsuri de Top</h6>
                              <?php endif; ?>
                          </div>


                      </div>
                  </div>
              </div>
          </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php echo $__env->make('layouts.user-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->

    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
<?php /**PATH D:\xampp\htdocs\romania-travel\resources\views/vizualizare-utilizator.blade.php ENDPATH**/ ?>