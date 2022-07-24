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
  </head>
  <body>

    <div class="page">

    <?php echo $__env->make('layouts.user-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Swiper-->

      <!-- Contact information-->


      <!-- Contact Form-->
      <section class="section section-sm section-last bg-default text-left">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Adaugă un articol</h3>
            </div>
            <div class="title-classic-text">
              <p>Articolul dumneavoastră va fi accesibil pe site după aprobare.</p>
            </div>
          </article>
          <form method="post" action="newUserArticle" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row row-14 gutters-14">
              <div class="col-md-12">
                <div class="form-wrap">
                  <input class="form-input" id="title"  required="" type="text" name="title" placeholder="Titlu articol"  oninvalid="this.setCustomValidity('Cȃmp necompletat!')" oninput="setCustomValidity('')">

                </div>
              </div>
              <div class="col-md-12">
                <div class="form-wrap">
                  <h5>Categorie articol:</h5>
                  <select class="form-control" name="categoryId">
                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($category['id']); ?>"><?php echo e($category['name']); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
                <div class="col-md-12">
              <div class="form-wrap">
                <label class="form-label" for="contact-message-2">Scurtă descriere</label>
                <textarea class="form-input textarea-lg" id="contact-message-2" name="description"  required="" oninvalid="this.setCustomValidity('Cȃmp necompletat (minim 10 caractere)!')" oninput="setCustomValidity('')" minlength="10" maxlength="300" ></textarea>
              </div>
            </div>
              <div class="col-md-12">
                <div class="form-group">
                  <h5>Imagine articol:</h5>
                <input class="form-input" id="imgInp" type="file" name="image" accept="image/*"  required=""  oninvalid="this.setCustomValidity('Selectaţi o imagine!')" oninput="setCustomValidity('')">
                          <br>
                    <p style="text-align: center"><img style="height: 300px" id="blah" src="images/600x366.jpg" alt="your image"  height="200px" /></p>
                </div>

              </div>
              <div class="col-12">
                <h5>Continut articol:</h5>
                  <textarea class="ckeditor" id="content" name="content"  required=""   oninvalid="this.setCustomValidity('Camp necompletat!')" oninput="setCustomValidity('')"></textarea>

              </div>
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Adaugă Articolul</button>
          </form>
        </div>
      </section>


        <?php echo $__env->make('layouts.user-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script>
    imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
    blah.src = URL.createObjectURL(file)
    }
    }
    </script>
    <script src="js/script.js"></script>
  <script>
   var msg = '<?php echo e(Session::get('eroareBD')); ?>';
   var exist = '<?php echo e(Session::has('eroareBD')); ?>';
   if(exist){
     alert(msg);
   }
  </script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\romania-travel\resources\views/adauga-articol.blade.php ENDPATH**/ ?>