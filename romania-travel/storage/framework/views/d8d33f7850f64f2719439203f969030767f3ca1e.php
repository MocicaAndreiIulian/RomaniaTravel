<?php if(\Illuminate\Support\Facades\Auth::user()->type == 1): ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panou de Control Administrator</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
  </head>
  <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

   <?php echo $__env->make('layouts.admin-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <div class="content-header">
         <div class="container-fluid">
           <div class="row mb-2">
             <div class="col-sm-6">
               <h1 class="m-0">Panou de control</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                 <li class="breadcrumb-item"><a href="index.php">Acasă</a></li>
                 <li class="breadcrumb-item active">Panou de Control</li>
               </ol>
             </div><!-- /.col -->
           </div><!-- /.row -->
         </div><!-- /.container-fluid -->
       </div>
       <!-- /.content-header -->
       <!-- Main content -->
       <section class="content">
         <div class="container-fluid">
           <!-- Info boxes -->
           <div class="row">
             <div class="col-12 col-sm-6 col-md-3">
               <div class="info-box">
                 <span class="info-box-icon  elevation-1"><i class="fas fa-newspaper text-info"></i></span>

                 <div class="info-box-content">
                   <a href="view-categories" style="color: inherit"> <span class="info-box-text">Categorii Articole</span> </a>
                   <span class="info-box-number"><?php echo e($statistics['Articles']); ?></span>
                 </div>
                 <!-- /.info-box-content -->
               </div>
               <!-- /.info-box -->
             </div>
             <!-- /.col -->
             <div class="col-12 col-sm-6 col-md-3">
               <div class="info-box mb-3">
                 <span class="info-box-icon  elevation-1"><i class="fas fa-map text-success"></i></span>

                 <div class="info-box-content">
                        <a href="view-posts" style="color: inherit">  <span class="info-box-text">Postari locatii</span></a>
             <span class="info-box-number"><?php echo e($statistics['Locations']); ?></span>
                 </div>
                 <!-- /.info-box-content -->
               </div>
               <!-- /.info-box -->
             </div>
             <!-- /.col -->

             <!-- fix for small devices only -->
             <div class="clearfix hidden-md-up"></div>

             <div class="col-12 col-sm-6 col-md-3">
               <div class="info-box mb-3">
                 <span class="info-box-icon  elevation-1"><i class="fas fa-question text-light"></i></span>

                 <div class="info-box-content">
                   <a href="questions-answers" style="color: inherit"> <span class="info-box-text">Intrebari</span> </a>
                   <span class="info-box-number"><?php echo e($statistics['Questions']); ?></span>
                 </div>
                 <!-- /.info-box-content -->
               </div>
               <!-- /.info-box -->
             </div>
             <!-- /.col -->
             <div class="col-12 col-sm-6 col-md-3">
               <div class="info-box mb-3">
                <span class="info-box-icon elevation-1"><i class="fas fa-comment-dots text-success"></i></span>

                 <div class="info-box-content">
                   <a href="view-opinions" style="color: inherit"> <span class="info-box-text">Opinii postari</span></a>
                   <span class="info-box-number"><?php echo e($statistics['Opinions']); ?></span>
                 </div>
                 <!-- /.info-box-content -->
               </div>
               <!-- /.info-box -->
             </div>
             <!-- /.col -->
           </div>
           <!-- /.row -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon  elevation-1"><i class="fas fa-comments text-info"></i></span>

            <div class="info-box-content">
              <a href="view-comments" style="color: inherit"> <span class="info-box-text">Comentarii Articole</span> </a>
              <span class="info-box-number"><?php echo e($statistics['Comments']); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon  elevation-1"><i class="fas fa-reply text-light"></i></span>

            <div class="info-box-content">
              <a href="answers" style="color: inherit"> <span class="info-box-text">Raspunsuri la intrebari</span> </a>
              <span class="info-box-number"><?php echo e($statistics['Answers']); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon  elevation-1"><i class="fas fa-user text-primary"></i></span>

            <div class="info-box-content">
                   <a href="view-users" style="color: inherit">  <span class="info-box-text">Utilizatori</span></a>
        <span class="info-box-number"><?php echo e($statistics['Users']); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
           <span class="info-box-icon elevation-1"><i class="fas fa-envelope text-warning"></i></span>

            <div class="info-box-content">
              <a href="view-messages" style="color: inherit"> <span class="info-box-text">Mesaje</span></a>
              <span class="info-box-number"><?php echo e($statistics['Messages']); ?></span>
            </div>
          <!-- /.info-box -->
        </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </section>
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon  elevation-1"><i class="fas fa-envelope text-warning"></i></span>

            <div class="info-box-content">
              <a href="view-resetpasses" style="color: inherit"> <span class="info-box-text">Mesaje Resetare</span> </a>
              <span class="info-box-number"><?php echo e($statistics['Resetpasses']); ?></span>
            </div>
             <!-- /.info-box-content -->
             </div>
               <!-- /.info-box -->
             </div>
             <!-- /.col -->
             <div class="col-12 col-sm-6 col-md-3">
               <div class="info-box mb-3">
                 <span class="info-box-icon  elevation-1"><i class="nav-icon fas fa-newspaper"></i></span>

                 <div class="info-box-content">
                        <a href="view-posts" style="color: inherit">  <span class="info-box-text">Articole</span></a>
             <span class="info-box-number"><?php echo e($statistics['Articles']); ?></span>
                 </div>
                 <!-- /.info-box-content -->
               </div>
               <!-- /.info-box -->
             </div>
             <!-- /.col -->

            </section>
            
            
            
   <!-- REQUIRED SCRIPTS -->
   <!-- jQuery -->
   <script src="plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap -->
   <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- overlayScrollbars -->
   <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
   <!-- AdminLTE App -->
   <script src="dist/js/adminlte.js"></script>

   <!-- PAGE PLUGINS -->
   <!-- jQuery Mapael -->
   <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
   <script src="plugins/raphael/raphael.min.js"></script>
   <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
   <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
   <!-- ChartJS -->
   <script src="plugins/chart.js/Chart.min.js"></script>

   <!-- AdminLTE for demo purposes -->
   <script src="dist/js/demo.js"></script>
   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="dist/js/pages/dashboard2.js"></script>
   </body>
   </html>
  <?php elseif(\Illuminate\Support\Facades\Auth::user()->type == 0): ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contul meu</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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
      <div style="margin-top: 100px; margin-bottom: 100px" class="container">
          <div class="main-body">

                <!-- Breadcrumb -->

                <!-- /Breadcrumb -->

                <div class="row gutters-sm">
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">

                          <div class="mt-3">
                            <form runat="server" action="profilePicture" method="POST"  enctype="multipart/form-data" >
                              <?php echo csrf_field(); ?>
                        <?php if(!empty($userPicture) AND $userPicture != ' ' ): ?>
    <p style="text-align: center"><img style="height: 200px" id="blah" src="<?php echo e('Images/User/'.$userPicture); ?>" alt="your image"  class="rounded-circle"height="200px" /></p>
                      <?php else: ?>
                      <p style="text-align: center"><img style="height: 200px" id="blah" src="images/User/profil.png" alt="your image"  class="rounded-circle"height="200px" /></p>
                      <?php endif; ?>

                      <p style="text-align: center">Schimba poza de profil</p>
                      <input type='hidden' value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->id); ?>" name="id" />

        <input  type='file' name="image"  id="imgInp" />

      <br><br>
                            <h4><?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></h4>
                            <h6 style="color: #01b3a7">Scor: <?php echo e(\Illuminate\Support\Facades\Auth::user()->scores); ?> puncte</h6>
                            <p class="text-secondary mb-1">Bine ai revenit!</p>
                              <br>
                              <a href="editare-cont"><button class="button button-md button-default-outline-2 button-ujarak">Actualizare poza profil</button></a>
  </form>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mt-3">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Postari:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b><?php echo e($statistics['myLocations']); ?></b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Articole trimise:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b><?php echo e($statistics['myArticles']); ?></b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Intrebari postate:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b><?php echo e($statistics['myQuestions']); ?></b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Opinii postari:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b><?php echo e($statistics['myOpinions']); ?></b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Comentarii articole:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b><?php echo e($statistics['myComments']); ?></b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Raspunsuri la intrebari:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b><?php echo e($statistics['myAnswers']); ?></b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Raspunsuri de top:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b><?php echo e($statistics['myAnswersTop']); ?></b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <a style="text-decoration: none" class="mb-0" href="<?php echo e(route('logout')); ?>"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              <?php echo e(__('Deconectare')); ?>

                          </a>

                          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                              <?php echo csrf_field(); ?>
                          </form>

                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Nume complet:</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <b><?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></b>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Email:</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <b><?php echo e(\Illuminate\Support\Facades\Auth::user()->email); ?></b>
                          </div>
                        </div>

                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Data inregistrarii:</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <b><?php echo e(date("d-m-Y", strtotime(\Illuminate\Support\Facades\Auth::user()->created_at))); ?></b>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-12">
                            <a href="editare-cont"><button class="button button-md button-default-outline-2 button-ujarak">Editare Informatii</button></a>
                          </div>
                        </div>
                      </div>
                    </div>



                    <div class="card mb-3">
                      <div class="card-body">

                        <div class="row">
                          <div class="col-sm-12">
                            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
  <a href="postarile-mele"><button type="button" style="color: #FFFFFF" class="btn btn-primary">Postarile mele</button></a>
<a style="margin-left: 20px;" href="articolele-mele"><button type="button" class="btn btn-primary">Articolele mele</button></a>
  <a style="margin-left: 20px;" href="intrebarile-mele"><button type="button" class="btn btn-primary">Intrebarile mele</button></a>
</div>
                          </div>
                        </div>
                      </div>
                    </div>


                  </div>


                </div>

              </div>
          </div>

      <!-- Contact information-->




        <?php echo $__env->make('layouts.user-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
<?php else: ?>
<?php die() ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\romania-travel2\romania-travel\resources\views/home.blade.php ENDPATH**/ ?>