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
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>

    <div class="page">

    <?php echo $__env->make('layouts.user-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Swiper-->

      <div class="container py-5">
          <div class="row">

              <div class="col-lg-3">
                  <h3 >Categorii</h3>
                  <ul class="list-unstyled templatemo-accordion">
                      <li class="pb-3">

                          <ul class="collapse show list-unstyled pl-3">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><a class="text-decoration-none" href="<?php echo e("articole-categorie-".$category['id']); ?>"><?php echo e($category['name']); ?></a></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>
                      </li>


                  </ul>

                  <div class="card mb-4">
                      <div class="card-header">Cauta</div>
                      <div class="card-body">
                        <form action="cautare-articol" method="POST">
                          <?php echo csrf_field(); ?>
                          <div class="input-group">
                              <input class="form-control" name="article" type="text" placeholder="Cauta un articol..." aria-label="Cauta un articol..." aria-describedby="button-search" />
                              <button class="btn btn-primary" id="button-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                          </div>
                        </form>
                      </div>
                  </div>
                    <?php if(auth()->guard()->check()): ?>
                  <a href="adauga-articol"><button class="btn btn-primary">Adauga un nou articol</button></a>
                  <?php else: ?>
                <button class="btn btn-primary" title="Trebuie sa fii conectat pentru a adauga un articol" disabled>Adauga un nou articol</button>
                  <?php endif; ?>
              </div>

              <div class="col-lg-9">
                  <div class="row">
                      <div class="col-md-6">
                          <ul class="list-inline shop-top-menu pb-3 pt-1">
                              <li class="list-inline-item">
                                  <a class="h3 text-dark text-decoration-none mr-3" href="#">Toate Articolele</a>
                              </li>

                          </ul>
                      </div>

                  </div>
                  <div class="row">




                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-md-4">
                          <div class="card mb-4 product-wap rounded-0">
                              <div class="card rounded-0">
                                  <img class="card-img rounded-0 img-fluid" src="<?php echo e('Images/Article/'.$article->image); ?>">
                                  <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                      <ul class="list-unstyled">

                                          <li><a class="btn btn-success text-white mt-2" href="continut-articol-<?php echo e($article->id); ?>"><i class="far fa-eye"></i></a></li>

                                      </ul>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <a href="continut-articol-<?php echo e($article->id); ?>" class="h5 text-decoration-none"><b><?php echo e($article->title); ?></b></a>
                                    <p>Categorie: <?php echo e($article->categoryName); ?></p>
                                    <p><?php echo e(substr($article->description,0,100).'...'); ?></p>

                                  <p class="text-center mb-0"><b>Autor: <?php echo e($article->userName); ?></b></p>
                              </div>
                          </div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </div>

              </div>

          </div>
      </div>


        <?php echo $__env->make('layouts.user-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script>
   var msg = '<?php echo e(Session::get('articolAdaugat')); ?>';
   var exist = '<?php echo e(Session::has('articolAdaugat')); ?>';
   if(exist){
     alert(msg);
   }
 </script>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\romania-travel2\romania-travel\resources\views/articole.blade.php ENDPATH**/ ?>