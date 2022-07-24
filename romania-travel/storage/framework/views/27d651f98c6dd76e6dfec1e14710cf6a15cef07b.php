<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Comentarii-Admin</title>

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
                       <h1>Opinii Postări</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="index.php">Acasă</a></li>
                           <!-- <li class="breadcrumb-item"><a href="home">Acasa</a></li>
                           <li class="breadcrumb-item active">Opinii Postari</li> -->
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


                           <!-- /.card-header -->
                           <div class="card-body">
                               <table id="example1" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>
                                       <th>ID</th>
                                       <th>Titlu Postare</th>
                                          <th>Nume Utilizator</th>
                                              <th>Comentariu</th>
                                                <th>Acțiuni</th>

                                     </tr>
                                   </thead>
                                   <tbody>
                                  <?php $__currentLoopData = $opinions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opinion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr>
                                           <td><?php echo e($opinion->id); ?></td>
                                            <td><?php echo e($opinion->postTitle); ?></td>
                                              <td><?php echo e($opinion->userName); ?></td>
                                                        <td><?php echo e($opinion->comment); ?></td>

                                           <td>
                                           <div class="btn-group" role="group" aria-label="Basic example">
                                              <?php if($opinion->approve === 0): ?>
                                              <a href=<?php echo e("opinion-approve/".$opinion->id); ?>><button style="margin-right: 5px" type="submit" class="btn btn-success">Aprobă</button></a>
                                              <?php else: ?>
                                              <button style="margin-right: 5px" type="submit" class="btn btn-success" disabled>Aprobă</button></a>
                                              <?php endif; ?>
                                               <a href=<?php echo e("opinion-delete/".$opinion->id); ?>><button style="margin-left: 5px" type="submit" class="btn btn-danger">Șterge</button></a></td>
                                               </div>
                                           </td>





                                       </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                   </tbody>
                                   <tfoot>
                                   <tr>
                                       <th>ID</th>
                                       <th>Titlu Postare</th>
                                          <th>Nume Utilizator</th>
                                              <th>Comentariu</th>
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

</body>
</html>
<?php /**PATH D:\xampp\htdocs\romania-travel\resources\views/view-opinions.blade.php ENDPATH**/ ?>