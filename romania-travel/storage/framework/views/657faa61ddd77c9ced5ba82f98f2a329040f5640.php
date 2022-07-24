<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adauga Articol</title>

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
                        <h1>Editare Articol</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Acasa</a></li>
                            <li class="breadcrumb-item active">Editeaza Articol</li>
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

                                <form id="quickForm" method="post" action="updateArticle"  enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input name="id"   value="<?php echo e($articles[0]->id); ?>" type="hidden" class="form-control">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Titlu:</label>

                                            <input name="title"  value="<?php echo e($articles[0]->title); ?>"  required="" type="text" class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <label>Autor</label>
                                            <select class="form-control" name="authorId">
                                              <option value="<?php echo e($articles[0]->joinIdUser); ?>">Autorul actual: <?php echo e($articles[0]->joinNameUser); ?></option>
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($user['id']); ?>"><?php echo e($user['name']); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Categorie</label>
                                            <select class="form-control" name="categoryId">
                                              <option value="<?php echo e($articles[0]->joinIdCategory); ?>">Categoria actuala: <?php echo e($articles[0]->joinNameCategory); ?></option>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($category['id']); ?>"><?php echo e($category['name']); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <label class="form-label" for="contact-message-2">Scurta descriere</label>
                                          <textarea class="form-control"  value="" name="description" data-constraints="@Required" required="" minlength="150" maxlength="300"><?php echo e($articles[0]->description); ?></textarea>
                                        </div>
                                              <div class="form-group">
                                        <label class="form-label" for="field-1">Conținut:</label>

                                                                              <textarea class="ckeditor" cols="80" id="editor1"  rows="10" name="content" >
                                                                                <?php echo e($articles[0]->content); ?>

                                                                              </textarea>

                                                                            </div>



                                                                  <div class="form-group">
                                                                      <label>Imagine principala:</label>
                                                                        <input type="hidden" value="<?php echo e($articles[0]->image); ?>" name="imageText"> 
                                                                      <input name="image" value="" type="file" class="form-control">

                                                                  </div>
                                                                  <div class="form-group">
                                                                      <label>Status:</label>


                                                                      <select class="form-control" name="status">
                                                                        <?php switch($articles[0] -> status):
                                                                        case (0): ?>
                                                                          <option value="0">Inactiv</option>

                                                                              <option value="1">Activ</option>
                                                                              <?php break; ?>
                                                                              <?php case (1): ?>
                                                                                    <option value="1">Activ</option>
                                                                              <option value="0">Inactiv</option>
                                                                              <?php break; ?>
                                                                  <?php endswitch; ?>
                                                                </select>
                                                                  </div>


                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Salveaza Articol</button>
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
<script src="plugins/ckeditor/ckeditor.js" type="text/javascript"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\romania-travel2\romania-travel\resources\views/edit-article.blade.php ENDPATH**/ ?>