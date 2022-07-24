<header class="section page-header">
     <!-- RD Navbar-->
     <div class="rd-navbar-wrap">
       <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
         <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
         <div class="rd-navbar-aside-outer">
           <div class="rd-navbar-aside">
             <!-- RD Navbar Panel-->
             <div class="rd-navbar-panel">
               <!-- RD Navbar Toggle-->
               <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
               <!-- RD Navbar Brand-->
               <div class="rd-navbar-brand">
                 <!--Brand--><a class="brand" href="index.php"><img src="" alt="" width="225" height="18"/><em style="font-size: 25px;">R<i class="fa-solid fa-globe"></i>mania</em>  <span style="font-size: 12px;">TRAVEL</span><i class="fa-solid fa-flag"></i></a>
               </div>
             </div>
             <div class="rd-navbar-aside-right rd-navbar-collapse">
               <ul class="rd-navbar-corporate-contacts">

                 <li>
                   <div class="unit unit-spacing-xs">
                     <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                     <div class="unit-body"><a class="link-phone" href="tel:#">+40 722 564 468</a></div>
                   </div>
                 </li>
               </ul>
               <!-- Button trigger modal -->



                <?php if(auth()->guard()->guest()): ?>
                <a class="button button-md button-default-outline-2 button-ujarak" href='login' >Conectează-te si împărtășește ultima ta călătorie</a>

                <?php else: ?>
               <a class="button button-md button-default-outline-2 button-ujarak" href='adauga-postare'>Împărtășește ultima ta călătorie</a>
               <?php endif; ?>
             </div>
           </div>
         </div>
         <div class="rd-navbar-main-outer">
           <div class="rd-navbar-main">
             <div class="rd-navbar-nav-wrap">
               <ul class="navbar-nav ms-auto">
                   <!-- Authentication Links -->
                   <?php if(auth()->guard()->guest()): ?>
                       <?php if(Route::has('login')): ?>
                           <li class="nav-item">
                               <a class="nav-link" href="login"><?php echo e(__('Conectare')); ?></a>
                           </li>
                       <?php endif; ?>

                       <?php if(Route::has('register')): ?>
                           <li class="nav-item">
                               <a class="nav-link" href="register"><?php echo e(__('Înregistrare')); ?></a>
                           </li>
                       <?php endif; ?>
                   <?php else: ?>
                       <li class="nav-item">
                           <a class="nav-link" href="home">
                               <?php echo e(Auth::user()->name); ?>

                           </a>

                           <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                   <?php echo e(__('Deconectare')); ?>

                               </a>

                               <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                   <?php echo csrf_field(); ?>
                               </form>
                           </div>
                       </li>
                   <?php endif; ?>
               </ul>





               <!-- RD Navbar Nav-->
               <ul class="rd-navbar-nav">
                 <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Acasă</a>
                 </li>
                 <li class="rd-nav-item"><a class="rd-nav-link" href="recenzii-locatii">Recenzii Locații</a>
                 </li>
                 <li class="rd-nav-item"><a class="rd-nav-link" href="articole">Articole</a>
                 </li>
                 <li class="rd-nav-item"><a class="rd-nav-link" href="intrebari">Întrebări</a>
                 </li>

                 <li class="rd-nav-item"><a class="rd-nav-link" href="contact">Contact</a>
                 </li>
                 <?php if(auth()->guard()->guest()): ?>
                 <li class="rd-nav-item"><a class="rd-nav-link" href="resetpass">Resetare Parolă</a>
                 <?php endif; ?>
                 </li>
               </ul>
             </div>
           </div>
         </div>
       </nav>
     </div>
   </header>
<?php /**PATH D:\xampp\htdocs\romania-travel\resources\views/layouts/user-nav.blade.php ENDPATH**/ ?>