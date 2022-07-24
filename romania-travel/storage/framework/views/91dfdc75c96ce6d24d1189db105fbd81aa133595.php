<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Articles-Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
  </head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
   <!-- Navbar -->
<?php echo $__env->make('layouts.admin-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Articole</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="index.php">Acasă</a></li>
                           <!-- <li class="breadcrumb-item"><a href="home">Acasa</a></li>
                           <li class="breadcrumb-item active">Articole</li> -->
                       </ol>
                   </div>
               </div>
           </div><!-- /.container-fluid -->
       </section>

       <!-- Main content -->
       <section class="content">


           <div class="container-fluid">
               <div class="row">
                   <div class="col-12">
                       <div class="card">

                           <div class="card-header">
                             <div class="d-flex justify-content-between">


                                 <div class="d-flex justify-content-between">
                                 <a href="new-article"><button style="margin-right: 5px" type="button" class="btn btn-success">
                                     Adaugă un nou articol
                                 </button>
                               </a>
                             </div>
                         </div>
                           </div>
                           <!-- /.card-header -->
                           <div class="card-body">
                               <table id="example1" class="table table-bordered table-striped">
                                   <thead>
                                   <tr>
                                     <th>ID</th>
                                      <th>Data</th>
                                     <th>Titlu</th>
                                     <th>Autor</th>
                                       <th>Categorie</th>
                                        <th>Acțiuni</th>

                                   </tr>
                                   </thead>
                                   <tbody>
                                  <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr>
                                           <td><?php echo e($article->id); ?></td>
                                           <td><?php echo e(date("d-m-Y H:i:s", strtotime($article->created_at))); ?></td>
                                           <td><?php echo e($article->title); ?></td>
                                           <td><?php echo e($article->userName); ?></td>
                                            <td><?php echo e($article->categoryName); ?></td>





                                           <td>
                   <div class="btn-group" role="group" aria-label="Basic example">

                    <?php if($article->status == 0): ?>
                    <a href=<?php echo e("approve-article-".$article->id); ?>>
                      <button style="margin-right: 5px;" type="submit" name="approve" class="btn btn-primary">Aprobă</button></a>
                      <?php elseif($article->status == 1): ?>
                        <a href=<?php echo e("disapprove-article-".$article->id); ?>>
                          <button style="margin-right: 5px;" type="submit" name="disapprove" class="btn btn-primary">Dezaprobă</button></a>
                    <?php endif; ?>



                                          <a href=<?php echo e("edit-article-".$article->id); ?>><button style="margin-right: 5px" type="submit" class="btn btn-primary">Editează</button></a>

                                             <a href=<?php echo e("article-destroy/".$article->id); ?>><button type="submit" class="btn btn-danger">Șterge</button></a></td>
                   </div>
                                   </td>



                                       </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                   </tbody>
                                   <tfoot>
                                   <tr>
                                       <th>ID</th>
                                      <th>Data</th>
                                       <th>Titlu</th>
                                       <th>Autor</th>
                                         <th>Categorie</th>
                                         <th>Acțiuni</th>

                                   </tr>
                                   </tfoot>
                               </table>
                           </div>
                           <!-- /.card-body -->
                       </div>
                       <!-- /.card -->
                   </div>
                   <!-- /.col -->
               </div>
               <!-- /.row -->
           </div>
           <!-- /.container-fluid -->
       </section>
       <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->



<!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
       <!-- Control sidebar content goes here -->
   </aside>
   <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
   $(function () {
       $("#example1").DataTable({
           "responsive": true, "lengthChange": false, "autoWidth": false,
           dom: 'frtBip',
           "language": {
    "search": "Caută:"
  },
           "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
       }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


   });
</script>
<!--EDIT MODAL -->
<!--  modal -->
<!-- final modal -->
<script>
   var msg = '<?php echo e(Session::get('eroareBD')); ?>';
   var exist = '<?php echo e(Session::has('eroareBD')); ?>';
   if(exist){
     alert(msg);
   }
 </script>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\romania-travel\resources\views/view-articles.blade.php ENDPATH**/ ?>