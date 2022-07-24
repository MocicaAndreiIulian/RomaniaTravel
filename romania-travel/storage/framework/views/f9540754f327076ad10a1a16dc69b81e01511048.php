<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resetpass-Admin</title>

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


<?php echo $__env->make('layouts.admin-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mesaje</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Acasa</a></li>
              <li class="breadcrumb-item active">Resetpass</li>
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

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                                <div class="d-flex justify-content-between">



                            </div>
                            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="products" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Nume Complect</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Mesaj</th>
                    <th>Actiuni</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $resetpasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resetpass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($resetpass->id); ?></td>
                    <td><?php echo e(date("d-m-Y H:i:s", strtotime($resetpass->created_at))); ?></td>
                    <td><?php echo e($resetpass->userName); ?></td>
                    <td><?php echo e($resetpass->email); ?></td>
                    <td><?php echo e($resetpass->phone); ?></td>

                      <td><?php echo e($resetpass->message); ?></td>
                        <td>
<div class="btn-group" role="group" aria-label="Basic example">
                  <a href=<?php echo e("destroy-resetpass/".$resetpass->id); ?>><button type="submit" style="margin-right: 5px" class="btn btn-danger">Șterge</button></a>
                  <a href=<?php echo e("user-schimba-".$resetpass->id); ?>><button style="margin-right: 5px" type="submit" class="btn btn-info">Schimba Parola</button></a>
</div>
                </td>
                  </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
<tfoot>
<tr>
  <th>ID</th>
  <th>Data</th>
  <th>Nume Complect</th>
  <th>Email</th>
  <th>Telefon</th>
  <th>Mesaj</th>
  <th>Actiuni</th>
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


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
 <!-- ./wrapper -->

 <!-- REQUIRED SCRIPTS -->
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
     $("#products").DataTable({
       "responsive": true, "lengthChange": false, "autoWidth": false,
              dom: 'frtBip',
       "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

   });
 </script>
 </body>
 </html>
<?php /**PATH C:\xampp\htdocs\romania-travel2\romania-travel\resources\views/view-resetpasses.blade.php ENDPATH**/ ?>