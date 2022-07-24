<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Postari Locatii</title>
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

      <!-- Hot tours-->
      <section class="section section-sm bg-default">
        <div class="container">
          <div class="d-flex justify-content-between">
              <div>
                  <?php if(auth()->guard()->check()): ?>
                        <a href="adauga-postare"><button class="btn btn-primary" type="submit">Adaugă o noua postare</button></a>
                  <?php else: ?>
                  <button class="btn btn-primary" type="button" title="Trebuie să fii conectat pentru a adăuga o postare" disabled>Adaugă o noua postare</button>

                  <?php endif; ?>
              </div>
              <div>
                <form action="cauta-postare" method="POST">
                  <?php echo csrf_field(); ?>
                  <div class="input-group">
                      <input class="form-control" name="locations" type="text" placeholder="Caută o postare..." aria-label="Caută o postare..." aria-describedby="button-search" />
                      <button class="btn btn-primary" id="button-search" name="search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
                </form>
              </div>
         </div>
          <div class="row row-sm row-40 row-md-50">

            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($location -> approve == 1): ?>
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
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </section>







        <?php echo $__env->make('layouts.user-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script>
   var msg = '<?php echo e(Session::get('postareAdaugata')); ?>';
   var exist = '<?php echo e(Session::has('postareAdaugata')); ?>';
   if(exist){
     alert(msg);
   }
 </script>
  </body>
</html>
<?php /**PATH D:\xampp\htdocs\romania-travel\resources\views/recenzii-locatii.blade.php ENDPATH**/ ?>