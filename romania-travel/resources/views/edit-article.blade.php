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
                        <h1>Editare Articol</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="#">Acasă</a></li>
                            <li class="breadcrumb-item active">Editează Articol</li> --}}
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
                                    @csrf
                                    <input name="id"   value="{{$articles[0]->id}}" type="hidden" class="form-control">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Titlu:</label>

                                            <input name="title"  value="{{$articles[0]->title}}"  required="" type="text" class="form-control" oninvalid="this.setCustomValidity('Cȃmp necompletat!')" oninput="setCustomValidity('')">

                                        </div>
                                        <div class="form-group">
                                            <label>Autor</label>
                                            <select class="form-control" name="authorId">
                                              <option value="{{$articles[0]->joinIdUser}}">Autorul actual: {{$articles[0]->joinNameUser}}</option>
                                                @foreach($users as $user)
                                                    <option value="{{$user['id']}}">{{$user['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Categorie</label>
                                            <select class="form-control" name="categoryId">
                                              <option value="{{$articles[0]->joinIdCategory}}">Categoria actuală: {{$articles[0]->joinNameCategory}}</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <label class="form-label" for="contact-message-2">Scurtă descriere</label>
                                          <textarea class="form-control"  value="" name="description"  required="" minlength="10" maxlength="300" oninvalid="this.setCustomValidity('Cȃmp necompletat (minim 10 caractere)!')" oninput="setCustomValidity('')">{{$articles[0]->description}}</textarea>
                                              <div class="form-group">
                                        <label class="form-label" for="field-1">Conținut:</label>

                                                                              <textarea class="ckeditor" cols="80" id="editor1"  rows="10" name="content" >
                                                                                {{$articles[0]->content}}
                                                                              </textarea>

                                                                            </div>



                                                                  <div class="form-group">
                                                                      <label>Imagine principală:</label>
                                                                      <input class="form-input" id="imgInp" type="file" name="image"   >
                                                                      <p style="text-align: center"><img style="height: 300px" id="blah" src="images/Article/{{$articles[0]->image}}" alt="your image"  height="200px" /></p>
                                                                        <input type="hidden" value="{{$articles[0]->image}}" name="imageText"  required="" oninvalid="this.setCustomValidity('Selectaţi o imagine!')" oninput="setCustomValidity('')"> 
                                                                      {{-- <input name="image" value="" type="file" class="form-control"> --}}

                                                                  </div>
                                                                  <div class="form-group">
                                                                      <label>Status:</label>


                                                                      <select class="form-control" name="status">
                                                                        @switch($articles[0] -> status)
                                                                        @case(0)
                                                                          <option value="0">Inactiv</option>

                                                                              <option value="1">Activ</option>
                                                                              @break
                                                                              @case(1)
                                                                                    <option value="1">Activ</option>
                                                                              <option value="0">Inactiv</option>
                                                                              @break
                                                                  @endswitch
                                                                </select>
                                                                  </div>


                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Salvează Articol</button>
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
<script src="js/core.min.js"></script>
<script>
    imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
    blah.src = URL.createObjectURL(file)
    }
    }
    </script>
    <script src="js/script.js"></script>

</body>
</html>
