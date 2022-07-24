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
@include('layouts.admin-nav')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Editare Locaţie</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Acasă</a></li>
                            <li class="breadcrumb-item active">Editează Locaţie</li>
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

                                <form id="quickForm" method="post" action="updateLocation"  enctype="multipart/form-data">
                                    @csrf
                                    <input name="id"   value="{{$locations[0]->id}}" type="hidden" class="form-control">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Titlu:</label>

                                            <input name="title"  value="{{$locations[0]->title}}"  required="" type="text" class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <label>Autor</label>
                                            <select class="form-control" name="authorId">
                                              <option value="{{$locations[0]->joinIdUser}}">Autorul actual: {{$locations[0]->joinNameUser}}</option>
                                                @foreach($users as $user)
                                                    <option value="{{$user['id']}}">{{$user['name']}}</option>
                                                @endforeach
                                            </select>
                                        
                                        </div>
                                        <div class="form-group">
                                          <label class="form-label" for="contact-message-2">Scurtă descriere</label>
                                          <textarea class="form-control"  value="" name="description" data-constraints="@Required" required="" minlength="150" maxlength="300">{{$locations[0]->description}}</textarea>
                                        </div>
                                              <div class="form-group">
                                        <label class="form-label" for="field-1">Conținut:</label>

                                                                              <textarea class="ckeditor" cols="80" id="editor1"  rows="10" name="content" >
                                                                                {{$locations[0]->content}}
                                                                              </textarea>

                                                                            </div>



                                                                  <div class="form-group">
                                                                      <label>Imagine principală:</label>
                                                                        <input type="hidden" value="{{$locations[0]->image}}" name="imageText"> 
                                                                      <input name="image" value="" type="file" class="form-control">

                                                                  </div>
                                                                  <div class="form-group">
                                                                      <label>Status:</label>

                                                                </select>
                                                                  </div>


                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Salvează Locaţia</button>
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
