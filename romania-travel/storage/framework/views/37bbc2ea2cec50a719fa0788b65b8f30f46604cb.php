<?php if($articles[0]->status == 1 OR isset(Auth::user()->id) AND Auth::user()->id === $articles[0]->authorId ): ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Vizualizare Articol</title>
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
    <style>.star-rating {
  font-size: 0;
  white-space: nowrap;
  display: inline-block;
  /* width: 250px; remove this */
  height: 50px;
  overflow: hidden;
  position: relative;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  /* width: 20%; remove this */
  z-index: 1;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: 0;
  display: inline-block;
  /* width: 20%; remove this */
  height: 100%;
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}
::after,
::before {
  height: 100%;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  text-align: center;
  vertical-align: middle;
}

.star-rating.star-5 {width: 250px;}
.star-rating.star-5 input,
.star-rating.star-5 i {width: 20%;}
.star-rating.star-5 i ~ i {width: 40%;}
.star-rating.star-5 i ~ i ~ i {width: 60%;}
.star-rating.star-5 i ~ i ~ i ~ i {width: 80%;}
.star-rating.star-5 i ~ i ~ i ~ i ~i {width: 100%;}

.star-rating.star-3 {width: 150px;}
.star-rating.star-3 input,
.star-rating.star-3 i {width: 33.33%;}
.star-rating.star-3 i ~ i {width: 66.66%;}
.star-rating.star-3 i ~ i ~ i {width: 100%;}
</style>
  </head>
  <body>

    <div class="page">

    <?php echo $__env->make('layouts.user-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Swiper-->

      <div class="container mt-5">
                 <div class="row">
                     <div class="col-lg-8">
                         <!-- Post content-->
                         <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <article>
                             <!-- Post header-->
                             <header class="mb-4">
                                 <!-- Post title-->
                                 <h1 class="fw-bolder mb-1"><?php echo e($article -> title); ?></h1>
                                 <!-- Post meta content-->
                                 <div class="text-muted fst-italic mb-2">Postat pe <?php echo e($article -> created_at); ?> de <?php echo e($article -> userName); ?></div>

                                 <!-- Post categories-->

                                 <?php if($totalRatings > 0): ?>
                                <h5>  <?php echo e(number_format($calculateRating, 2, ',', ' ')); ?> <i class="fa fa-star"  style="color: #ffdf88" aria-hidden="true"></i>
 | <?php echo e($totalRatings); ?> Commentarii</h5>
                                  <?php else: ?>
                                  <p>Nu exista recenzii pentru acest articol</p>
                                  <?php endif; ?>

                             </header>
                             <!-- Preview image figure-->
                             <figure class="mb-4"><img class="img-fluid rounded" src="<?php echo e('Images/Article/'.$article->image); ?>" alt="..." /></figure>
                             <!-- Post content-->
                             <section class="mb-5">
                                 <html><?php echo ($article->description); ?></html>
                                 <br>
                                <html><?php echo ($article->content); ?></html>


                             </section>

                         </article>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <!-- Comments section-->

                         <section class="mb-5">
                             <div class="card bg-light">
                                 <div class="card-body">
                                     <!-- Comment form-->
                                     <?php if(auth()->guard()->check()): ?>
                                     <form action="addComment" method="POST">
                                         <?php echo csrf_field(); ?>
                                       <textarea class="form-control" name="comment" rows="3" placeholder="Asteptam cu nerabdare parerea ta despre acest articol!"></textarea>
                                     <!-- Comment with nested comments-->
                                <input type="hidden" name="articleId" value="<?php echo e($articles[0] -> id); ?>">
                                <input type="hidden" name="userId" value="<?php echo e(Auth::user()->id); ?>">
                                     <div class="float-left">   <span class="star-rating star-5">
                                          <input type="radio" name="rating" value="1"><i></i>
                                          <input type="radio" name="rating" value="2"><i></i>
                                          <input type="radio" name="rating" value="3"><i></i>
                                          <input type="radio" name="rating" value="4"><i></i>
                                          <input type="radio" name="rating" value="5"><i></i>
                                        </span>
                                      </div>

                                      <br>
<div class="float-right">
        <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-star" aria-hidden="true"></i> Adauga comentariu</button>
      </div>
      <div>
      <br>
    </form>
    <?php else: ?>
    Trebuie sa fii conectat pentru a putea adauga un comentariu
                                  <?php endif; ?>
                                     <br><br><br>
                                     <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <?php if($comment-> approve === 1): ?>
                                     <div class="d-flex mb-4">
                                         <!-- Parent comment-->
                                         <div class="flex-shrink-0">


                                            <?php if(!empty($comment -> userPicture) AND $comment -> userPicture != ' ' ): ?>
                                <img class="rounded-circle" src="<?php echo e('Images/User/'.$comment -> userPicture); ?>" width="50" alt="..." />

                                                 <?php else: ?>


                                           <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" width="50" alt="..." />
                                            <?php endif; ?>
                                         </div>                                         <div class="ms-3">
                                             <div class="fw-bold"><b><?php echo e($comment -> userName); ?></b></div>
<?php echo e($comment -> comment); ?>                                           <!-- Child comment 1-->

                                 </div>
                             </div>
                             <?php endif; ?>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                         </section>

                     </div>
                     <!-- Side widgets-->
                     <div class="col-lg-4">
                     <?php if($articles[0]->status == 0): ?>
        <a class="text-decoration-none" href=<?php echo e("edit-articleuser-".$articles[0]->id); ?>>
        <button type="submit" style="margin-bottom : 10px" class="btn btn-success btn-lg"><i class="fa fa-star" aria-hidden="true"></i> Editeaza Articol</button></a>
<?php endif; ?>
                         <!-- Search widget-->
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
                         <!-- Categories widget-->
                         <div class="card mb-4">
                           <div class="card-header">Categorii</div>
                        <div class="d-flex justify-content-center">
                             <div class="p-4">

                                       <ul class="list-unstyled mb-0">
                                         <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <li><a class="text-decoration-none" href="<?php echo e("articole-categorie-".$category['id']); ?>"><?php echo e($category['name']); ?></a></li>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         </ul>
                               </div>
                             </div>
                     </div>
                         <!-- Side widget-->
                     </div>
                 </div>
             </div>


        <?php echo $__env->make('layouts.user-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script>
   var msg = '<?php echo e(Session::get('comentariuAdaugat')); ?>';
   var exist = '<?php echo e(Session::has('comentariuAdaugat')); ?>';
   if(exist){
     alert(msg);
   }
  </script>
  </body>
</html>
<?php else: ?>
 <script>window.location = "articole";</script>
 <?php endif; ?>
<?php /**PATH C:\xampp\htdocs\romania-travel2\romania-travel\resources\views/continut-articol.blade.php ENDPATH**/ ?>