<?php if($questions[0]->approve == 1 OR isset(Auth::user()->id) AND Auth::user()->id === $questions[0]->userId OR isset(Auth::user()->type) AND Auth::user()->type === 1 ): ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Vizualizare Intrebare</title>
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


      <!-- Contact information-->

      <!-- Contact Form-->
      <section class="section section-sm section-last bg-default text-left">
        <div class="container">
          <div class="d-flex justify-content-between">
              <div>
                <br>
                 <h6><img style="height: 50px" id="blah" src="<?php echo e('Images/User/'.$questions[0]->userPicture); ?>"
                    alt="your image"  class="rounded-circle"height="50px" /> <?php echo e($questions[0]->userName); ?></h6>
                 <br>
              </div>
              <div>
                <br>
                  <h6><?php echo e(date("d-m-Y H:i:s", strtotime($questions[0]->created_at))); ?></h6>
              </div>
         </div>
          <article class="title-classic">

            <div class="row">
              <div class="col">
            <div class="title-classic-title">
              <h3><?php echo e($questions[0]->title); ?></h3>
            </div>
          </div>
          <div class="col">
            <div class="title-classic-text">
              <p style="text-align:justify"><?php echo e($questions[0]->question); ?></p>
            </div>
          </div>
        </div>
          </article>
          <?php if(auth()->guard()->check()): ?>
            <?php if($questions[0]->solved === 0): ?>
          <form method="post" action="sendAnswer">
            <?php echo csrf_field(); ?>
            <div class="row row-14 gutters-14">
              <div class="col-12">
                <div class="form-wrap">
                  <input type="hidden" name="questionId" value="<?php echo e($questions[0]->id); ?>" >
                  <input type="hidden" name="userId" value="<?php echo e(Auth::user()->id); ?>" >
                  <label class="form-label" for="contact-message-2">Adauga un raspuns pentru intrebarea postata de <?php echo e($questions[0]->userName); ?></label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="answer" data-constraints="@Required" required="" oninvalid="this.setCustomValidity('Camp necompletat!')" oninput="setCustomValidity('')"></textarea>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between">
                <div>

                </div>
                <div>
                  <br>
                  <button class="btn btn-primary" type="submit">Adauga Raspunsul</button>
                </div>
           </div>

          </form>
          <?php elseif($questions[0]->solved === 1): ?>
          <br><br>
              <h4><?php echo e($questions[0]->userName); ?> a primit raspunsul dorit. Acesta va multumeste tuturor!</h4>
          <?php else: ?>
              <br><br>
          <h4>Un moderator a decis sa inchida aceasta discutie!</h4>
          <?php endif; ?>
          <?php else: ?>
              <br><br>
          <h4>Poti raspunde la intrebarea postata de <?php echo e($questions[0]->userName); ?> doar dupa conectare!</h4>
          <?php endif; ?>
          <br><hr><br>
          <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <article class="title-classic">
            <div class="row">
              <div class="col">
            <div class="title-classic-title">
              <h5><img style="height: 50px" id="blah" src="<?php echo e('Images/User/'.$answer->userPicture); ?>"
                 alt="your image"  class="rounded-circle"height="50px" /> <?php echo e($answer->userName); ?>  <?php if($answer->favorite === 1): ?> <span style="color: #dc3545"><i class="fa-solid fa-heart"></i></span><sub style="color: #dc3545">Raspuns fav<i class="fa-solid fa-globe"></i> rit</sub><?php endif; ?></h5>
                 <br>
            </div>
          </div>
          <div class="col">
            <div class="title-classic-text">
              <p style="text-align:justify"><?php echo e($answer->answer); ?></p>
            </div>
          </div>
          </div>
          </article>
          <div class="d-flex justify-content-between">
              <div>
                <br>
                  <h6><?php echo e(date("d-m-Y H:i:s", strtotime($answer->created_at))); ?></h6>
              </div>
              <div>
                <?php if($questions[0]->solved === 0 and isset(Auth::user()->id) And $questions[0]->idFromUser == Auth::user()->id ): ?>
                <form method="POST" action="closeQuestion">
                  <?php echo csrf_field(); ?>

                      <input type="hidden" name="questionId" value="<?php echo e($questions[0]->id); ?>">
                  <input type="hidden" name="id" value="<?php echo e($answer->id); ?>">
                  <input type="hidden" name="userId" value="<?php echo e($answer->idFromUser); ?>">
                  <input type="hidden" name="scores" value="<?php echo e($answer->scores); ?>">
                  <div class="btn-group" role="group" aria-label="Basic example">
                  <button class="btn btn-edit" type="submit"  title="Selectand acest raspuns topicul va fi inchis">Marcheaza ca Raspuns Favorit</button>
                </div>

                </form>
                  <?php endif; ?>
                  <?php if(isset(Auth::user()->type) and Auth::user()->type === 1 and $answer->favorite !== 1): ?>
                  <a href=<?php echo e("destroy-answer/".$answer->id); ?>><button type="submit" class="btn btn-danger">Șterge Acest Raspuns</button></a></td>
                  <?php endif; ?>
              </div>
         </div>
         <br>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
   var msg = '<?php echo e(Session::get('raspunsAdaugat')); ?>';
   var exist = '<?php echo e(Session::has('raspunsAdaugat')); ?>';
   if(exist){
     alert(msg);
   }
 </script>
  </body>
</html>
<?php else: ?>
 <script>window.location = "intrebari";</script>
 <?php endif; ?>
<?php /**PATH D:\xampp\htdocs\romania-travel\resources\views/vizualizare-intrebare.blade.php ENDPATH**/ ?>