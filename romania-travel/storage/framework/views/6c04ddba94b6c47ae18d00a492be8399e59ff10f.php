<div class="preloader flex-column justify-content-center align-items-center">
   <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
 </div>

 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-dark">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="home" class="nav-link">Acasa</a>
     </li>

   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
     <!-- Navbar Search -->


     <!-- Messages Dropdown Menu -->
     <li class="nav-item dropdown">

       <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

         <div class="dropdown-divider"></div>

         <div class="dropdown-divider"></div>

         <div class="dropdown-divider"></div>

       </div>
     </li>
     <!-- Notifications Dropdown Menu -->
     <li class="nav-item dropdown">

       <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">


       </div>
     </li>
     <li class="nav-item">
       <a class="nav-link" data-widget="fullscreen" href="#" role="button">
         <i class="fas fa-expand-arrows-alt"></i>
       </a>
     </li>

   </ul>
 </nav>
 <!-- /.navbar -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="home" class="brand-link">
     <span class="brand-text font-weight-light">MENIU ADMINISTRATOR</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">

       <div class="info">

<!--info user!!!!!!!!!!!!!!!-->
       </div>
     </div>

     <!-- SidebarSearch Form -->
     <div class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
           <button class="btn btn-sidebar">
             <i class="fas fa-search fa-fw"></i>
           </button>
         </div>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="view-posts" class="nav-link">
                    <i class="nav-icon fas fa-map"></i>
                  <p>
                    Postari locatii
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-opinions" class="nav-link">
                    <i class="nav-icon fas fa-comment-dots"></i>
                  <p>
                    Opinii postari
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="view-articles" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                  <p>
                    Articole
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-comments" class="nav-link">
                    <i class="nav-icon fas fa-comments"></i>
                  <p>
                    Comentarii articole
                  </p>
                </a>
              </li>
         <li class="nav-item">
           <a href="view-categories" class="nav-link">
               <i class="nav-icon fas fa-list-alt"></i>
             <p>
               Categorii Articole
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="questions-answers" class="nav-link">
               <i class="nav-icon fas fa-question"></i>
             <p>
               Intrebari
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="answers" class="nav-link">
               <i class="nav-icon fas fa-reply"></i>
             <p>
               Raspunsuri Intrebari
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="view-users" class="nav-link">
               <i class="nav-icon fas fa-user"></i>
             <p>
               Utilizatori
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="view-messages" class="nav-link">
               <i class="nav-icon fas fa-envelope "></i>
             <p>
               Mesaje
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="view-resetpasses" class="nav-link">
               <i class="nav-icon fas fa-envelope "></i>
             <p>
              Mesaje Resetare
             </p>
           </a>
         </li>
<li>
             <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 <?php echo e(__('Logout')); ?>

             </a>

             <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                 <?php echo csrf_field(); ?>
             </form>

         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>
<?php /**PATH C:\xampp\htdocs\romania-travel2\romania-travel\resources\views/layouts/admin-nav.blade.php ENDPATH**/ ?>