@if(\Illuminate\Support\Facades\Auth::user()->type == 1)

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

   @include ('layouts.admin-nav')

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
                 <!-- <li class="breadcrumb-item active">Panou de Control</li> -->
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
                   <a href="view-categories" style="color: inherit"> <span class="info-box-text">Categorii articole</span> </a>
                   <span class="info-box-number">{{$statistics['Articles']}}</span>
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
                        <a href="view-posts" style="color: inherit">  <span class="info-box-text">Postări locaţii</span></a>
             <span class="info-box-number">{{$statistics['Locations']}}</span>
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
                   <a href="questions-answers" style="color: inherit"> <span class="info-box-text">Întrebări</span> </a>
                   <span class="info-box-number">{{ $statistics['Questions']}}</span>
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
                   <a href="view-opinions" style="color: inherit"> <span class="info-box-text">Opinii postări</span></a>
                   <span class="info-box-number">{{$statistics['Opinions']}}</span>
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
              <a href="view-comments" style="color: inherit"> <span class="info-box-text">Comentarii articole</span> </a>
              <span class="info-box-number">{{ $statistics['Comments']}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon  elevation-1"><i class="fas fa-reply text-light"></i></span>

            <div class="info-box-content">
              <a href="answers" style="color: inherit"> <span class="info-box-text">Răspunsuri la întrebări</span> </a>
              <span class="info-box-number">{{$statistics['Answers']}}</span>
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
        <span class="info-box-number">{{ $statistics['Users']}}</span>
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
              <span class="info-box-number">{{$statistics['Messages']}}</span>
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
              <a href="view-resetpasses" style="color: inherit"> <span class="info-box-text">Mesaje resetare</span> </a>
              <span class="info-box-number">{{ $statistics['Resetpasses']}}</span>
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
                        <a href="view-articles" style="color: inherit">  <span class="info-box-text">Articole</span></a>
             <span class="info-box-number">{{$statistics['Articles']}}</span>
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
  @elseif (\Illuminate\Support\Facades\Auth::user()->type == 0)
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

    @include('layouts.user-nav')
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
                              @csrf
                        @if(!empty($userPicture) AND $userPicture != ' ' )
    <p style="text-align: center"><img style="height: 200px" id="blah" src="{{'Images/User/'.$userPicture}}" alt="your image"  class="rounded-circle"height="200px" /></p>
                      @else
                      <p style="text-align: center"><img style="height: 200px" id="blah" src="images/User/profil.png" alt="your image"  class="rounded-circle"height="200px" /></p>
                      @endif

                      <p style="text-align: center">Schimbă poza de profil</p>
                      <input type='hidden' value="{{\Illuminate\Support\Facades\Auth::user()->id}}" name="id" />

        <input  type='file' accept="image/*" name="image"  id="imgInp" />

      <br><br>
                            <h4>{{\Illuminate\Support\Facades\Auth::user()->name}}</h4>
                            <h6 style="color: #01b3a7">Scor: {{\Illuminate\Support\Facades\Auth::user()->scores}} puncte</h6>
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
                          <h6 class="mb-0">Postări:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b>{{$statistics['myLocations']}}</b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Articole trimise:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b>{{$statistics['myArticles']}}</b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Întrebări postate:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b>{{$statistics['myQuestions']}}</b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Opinii postări:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b>{{$statistics['myOpinions']}}</b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Comentarii articole:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b>{{$statistics['myComments']}}</b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Răspunsuri la întrebări:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b>{{$statistics['myAnswers']}}</b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Răspunsuri de top:</h6>
                          <span class="text-secondary"><h6 class="text-secondary"><b>{{$statistics['myAnswersTop']}}</b><h6></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <a style="text-decoration: none" class="mb-0" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Deconectare') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
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
                            <b>{{\Illuminate\Support\Facades\Auth::user()->name}}</b>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Email:</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <b>{{\Illuminate\Support\Facades\Auth::user()->email}}</b>
                          </div>
                        </div>

                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Data inregistrării:</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <b>{{  date("d-m-Y", strtotime(\Illuminate\Support\Facades\Auth::user()->created_at)) }}</b>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-12">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="editare-cont"><button style="margin-right: 100px" class="button button-md button-default-outline-2 button-ujarak">Editare Informaţii</button></a>
                            <a href="editare-pass"><button class="button button-md button-default-outline-2 button-ujarak">Schimbare Parolă</button></a>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>



                    <div class="card mb-3">
                      <div class="card-body">

                        <div class="row">
                          <div class="col-sm-12">
                            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
  <a href="postarile-mele"><button type="button" style="color: #FFFFFF" class="btn btn-primary">Postările mele</button></a>
<a style="margin-left: 20px;" href="articolele-mele"><button type="button" class="btn btn-primary">Articolele mele</button></a>
  <a style="margin-left: 20px;" href="intrebarile-mele"><button type="button" class="btn btn-primary">Întrebările mele</button></a>
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




        @include('layouts.user-footer')
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
@else
<?php die() ?>
@endif
