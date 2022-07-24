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

        <input  type='file' name="image"  id="imgInp" />

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
                          <h6 class="mb-0">Intrebări postate:</h6>
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
                    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Data</th>
        <th scope="col">Titlu</th>
          <th scope="col">Categorie</th>
        <th scope="col">Status</th>
          <th scope="col">Detalii</th>
      </tr>
    </thead>
    <tbody>
      @foreach($myArticles as $myArticle)
      <tr>
        <th scope="row">{{$myArticle->id}}</th>
        <td>      {{  date("d-m-Y H:i:s", strtotime($myArticle->created_at)) }}</td>
          <td>{{$myArticle->title}}</td>
                <td>{{$myArticle->joinNameCategory}}</td>
        <td>    @switch($myArticle->status)
                                        @case(1)
                                            Aprobat
                                          @break
                                          @case(0)
                                              Neaprobat

                                            @break
                                                  @endswitch</td>

        <td>
        <div class="btn-group" role="group" aria-label="Basic example">





                               <a href="{{"continut-articol-".$myArticle->id}}"><button style="margin-right: 5px" type="submit" class="btn btn-info">Detalii</button></a>
                             </td>


        </div>
      </tr>
      @endforeach
    </tbody>
  </table>




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
