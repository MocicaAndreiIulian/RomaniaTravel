
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Schimbare Parolă</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
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
                        <h1>Schimbare Parolă</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="home">Meniu Administrator</a></li>
                            
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Formular pentru <small>editare</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                                <form id="quickForm" method="post" action="user-reset">
                                    <?php echo csrf_field(); ?>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>ID</label>
                                            <input name="id" value="<?php echo e($users[0] -> id); ?>"  required="" type="text" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nume:</label>

                                            <input name="name"  value="<?php echo e($users[0] -> name); ?>" required="" type="text" class="form-control" readonly>

                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>

                                            <input name="email"  value="<?php echo e($users[0] -> email); ?>" required="" type="text" class="form-control" readonly>
                                            </div>

                                        <div class="form-group">
                                            <label>Parola:</label>

                                            <input name="password"  placeholder="Noua parola" type="password" minlength="8" class="form-control"  oninvalid="this.setCustomValidity('Parola trebuie sa aiba minim 8 caractere!')" oninput="setCustomValidity('')">

                                        </div>
                                        <div class="form-group">
                                            <label>Tip:</label>


                                            <select class="form-control" name="type" readonly>
                                              <?php switch($users[0] -> type):
                                              case (0): ?>
                                                <option value="0">Utilizator</option>

                                                    <option value="1">Administrator</option>
                                                    <?php break; ?>
                                                    <?php case (1): ?>
                                                          <option value="1">Administrator</option>
                                                    <option value="0">Utilizator</option>


                                                    <?php break; ?>


                                        <?php endswitch; ?>
                                      </select>
                                        </div>
                                    </div>

                                      </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Schimbare Parolă</button>
                                    </div>
                                </form>

                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
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

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->

</body>
</html>
<?php /**PATH D:\xampp\htdocs\romania-travel\resources\views/user-reset.blade.php ENDPATH**/ ?>