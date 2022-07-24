<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Intrebari</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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

      <!-- Hot tours-->
      <section class="section section-sm bg-default">
        <div class="container">
          <div class="d-flex justify-content-between">
              <div>
                  @auth
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#newQuestion">Adaugă întrebare</button>
                  @else
                  <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#newQuestion" title="Trebuie sa fii conectat pentru a adauga o intrebare" disabled>Adaugă întrebare</button>

                  @endauth
              </div>
              <div>
                <form action="cauta-intrebare" method="POST">
                  @csrf
                  <div class="input-group">
                      <input class="form-control" name="questions" type="text" placeholder="Caută o intrebare..." aria-label="Caută o intrebare..." aria-describedby="button-search" />
                      <button class="btn btn-primary" name="search" id="button-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
                </form>
              </div>
         </div>
          <div class="row row-sm row-40 row-md-50">
            @foreach($questions as $question)
            @if($question->approve == 1)
            <div class="col-sm-6 col-md-12 wow fadeInRight">
              <!-- Product Big-->
              <article class="product-big">
                <div class="card">
      <div class="card-body">
        <h6>Autor întrebare: <em>{{$question->userName}}</em></h6>
        <br>
        <h4>{{$question->title}}</h4>
        <p>{{substr($question->question,0,150)."..."}}</p>
        <br>
        <div class="d-flex justify-content-between">
            <div>
               <!-- <h6>Numar raspunsuri primite:</h6> -->
               <br>
               @if($question->solved === 0)
               <h6><b style="color: #dc3545">Întrebare Activă</b></h6>
               @elseif($question->solved === 1)
                <h6><b style="color: #28a745">Întrebare Soluționată</b></h6>
                @elseif($question->solved === 2)
                <h6><b style="color: blue">Întrebare Moderată</b></h6>
                @endif
            </div>
            <div>
              <a class="button button-black-outline button-ujarak" href="{{'vizualizare-intrebare-'.$question->id }}">Vezi Răspunsuri</a>
            </div>
       </div>
      </div>

    </div>
              </article>
            </div>
            @endif
            @endforeach
          </div>
        </div>
      </section>







        @include('layouts.user-footer')
    </div>
    <!-- Global Mailform Output-->


    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script>
   var msg = '{{Session::get('intrebareAdaugata')}}';
   var exist = '{{Session::has('intrebareAdaugata')}}';
   if(exist){
     alert(msg);
   }
  </script>
    <div class="modal fade bd-example-modal-lg" id="newQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg" >
         <form action="addQuestion" method="Post">
         @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adaugă o întrebare</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
  @auth
              <input type="hidden" name="userId" value="{{ Auth::user()->id }}" >
            <div class="form-wrap">
                <p style="margin-top: 10px"><b>Titlu întrebare:</b></p>
              <input class="form-input" id="contact-your-name-2" type="text" name="title" data-constraints="@Required" required="" oninvalid="this.setCustomValidity('Cȃmp necompletat!')" oninput="setCustomValidity('')">
            </div>
            <div class="form-wrap">
                <p style="margin-top: 10px"><b>Conţinut întrebare:</b></p>
                <div class="form-wrap">
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="question" data-constraints="@Required" required="" oninvalid="this.setCustomValidity('Cȃmp necompletat!')" oninput="setCustomValidity('')"></textarea>
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
            <button type="submit" class="btn btn-primary">Trimite Întrebarea</button>
          </div>
        </div>
      </form>
      </div>
    </div>
    @endauth


  </body>
</html>
