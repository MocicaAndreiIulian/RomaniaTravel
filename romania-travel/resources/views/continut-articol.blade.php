@if($articles[0]->status == 1 OR isset(Auth::user()->id) AND Auth::user()->id === $articles[0]->authorId )
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Vizualizare Articol</title>
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
    <style>.star-rating {
  font-size: 0;
  white-space: nowrap;
  display: inline-block;
  /* width: 250px; remove this */
  height: 50px;
  overflow: hidden;
  position: relative;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  /* width: 20%; remove this */
  z-index: 1;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: 0;
  display: inline-block;
  /* width: 20%; remove this */
  height: 100%;
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}
::after,
::before {
  height: 100%;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  text-align: center;
  vertical-align: middle;
}

.star-rating.star-5 {width: 250px;}
.star-rating.star-5 input,
.star-rating.star-5 i {width: 20%;}
.star-rating.star-5 i ~ i {width: 40%;}
.star-rating.star-5 i ~ i ~ i {width: 60%;}
.star-rating.star-5 i ~ i ~ i ~ i {width: 80%;}
.star-rating.star-5 i ~ i ~ i ~ i ~i {width: 100%;}

.star-rating.star-3 {width: 150px;}
.star-rating.star-3 input,
.star-rating.star-3 i {width: 33.33%;}
.star-rating.star-3 i ~ i {width: 66.66%;}
.star-rating.star-3 i ~ i ~ i {width: 100%;}
</style>
  </head>
  <body>

    <div class="page">

    @include('layouts.user-nav')
      <!-- Swiper-->

      <div class="container mt-5">
                 <div class="row">
                     <div class="col-lg-8">
                         <!-- Post content-->
                         @foreach($articles as $article)
                         <article>
                             <!-- Post header-->
                             <header class="mb-4">
                                 <!-- Post title-->
                                 <h1 class="fw-bolder mb-1">{{$article -> title}}</h1>
                                 <!-- Post meta content-->
                                 <div class="text-muted fst-italic mb-2">Postat pe {{$article -> created_at}} de {{$article -> userName}}</div>

                                 <!-- Post categories-->

                                 @if($totalRatings > 0)
                                <h5>  {{number_format($calculateRating, 2, ',', ' ')}} <i class="fa fa-star"  style="color: #ffdf88" aria-hidden="true"></i>
 | {{$totalRatings}} Commentarii</h5>
                                  @else
                                  <p>Nu există recenzii pentru acest articol</p>
                                  @endif

                             </header>
                             <!-- Preview image figure-->
                             <figure class="mb-4"><img class="img-fluid rounded" src="{{'Images/Article/'.$article->image}}" alt="..." /></figure>
                             <!-- Post content-->
                             <section class="mb-5">
                                 <html>{!! ($article->description) !!}</html>
                                 <br>
                                <html>{!! ($article->content) !!}</html>


                             </section>

                         </article>
                         @endforeach
                         <!-- Comments section-->

                         <section class="mb-5">
                             <div class="card bg-light">
                                 <div class="card-body">
                                     <!-- Comment form-->
                                     @auth
                                     <form action="addComment" method="POST">
                                         @csrf
                                       <textarea class="form-control" name="comment" rows="3" placeholder="Aşteptăm cu nerabdare părerea ta despre acest articol!" required=""  oninvalid="this.setCustomValidity('Camp necompletat!')" oninput="setCustomValidity('')"></textarea>
                                     <!-- Comment with nested comments-->
                                <input type="hidden" name="articleId" value="{{$articles[0] -> id }}">
                                <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                                     <div class="float-left">   <span class="star-rating star-5" >
                                          <input type="radio" name="rating" value="1"><i></i>
                                          <input type="radio" name="rating" value="2"><i></i>
                                          <input type="radio" name="rating" value="3"><i></i>
                                          <input type="radio" name="rating" value="4"><i></i>
                                          <input type="radio" name="rating" value="5" checked><i></i>
                                        </span>
                                      </div>

                                      <br>
<div class="float-right">
        <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-star" aria-hidden="true" ></i> Adaugă comentariu</button>
      </div>
      <div>
      <br>
    </form>
    @else
    Trebuie să fii conectat pentru a putea adăuga un comentariu
                                  @endauth
                                     <br><br><br>
                                     @foreach($comments as $comment)
                                     @if($comment-> approve === 1)
                                     <div class="d-flex mb-4">
                                         <!-- Parent comment-->
                                         <div class="flex-shrink-0">


                                            @if(!empty($comment -> userPicture) AND $comment -> userPicture != ' ' )
                                <img class="rounded-circle" src="{{'Images/User/'.$comment -> userPicture}}" width="50" alt="..." />

                                                 @else


                                           <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" width="50" alt="..." />
                                            @endif
                                         </div>                                         <div class="ms-3">
                                             <div class="fw-bold"><b>{{$comment -> userName }}</b></div>
{{$comment -> comment }}                                           <!-- Child comment 1-->

                                 </div>
                             </div>
                             @endif
                             @endforeach

                         </section>

                     </div>
                     <!-- Side widgets-->
                     <div class="col-lg-4">
                     @if($articles[0]->status == 0)
        <a class="text-decoration-none" href={{"edit-articleuser-".$articles[0]->id}}>
        <button type="submit" style="margin-bottom : 10px" class="btn btn-success btn-lg"><i class="fa fa-edit" aria-hidden="true"></i> Editează Articol</button></a>
@endif
                         <!-- Search widget-->
                         <div class="card mb-4">
                             <div class="card-header">Caută</div>
                             <div class="card-body">
                               <form action="cautare-articol" method="POST">
                                 @csrf
                                 <div class="input-group">
                                     <input class="form-control" name="article" type="text" placeholder="Caută un articol..." aria-label="Cauta un articol..." aria-describedby="button-search" />
                                     <button class="btn btn-primary" id="button-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                 </div>
                               </form>
                             </div>
                         </div>
                         <!-- Categories widget-->
                         <div class="card mb-4">
                           <div class="card-header">Categorii</div>
                        <div class="d-flex justify-content-center">
                             <div class="p-4">

                                       <ul class="list-unstyled mb-0">
                                         @foreach($categories as $category)
                                           <li><a class="text-decoration-none" href="{{"articole-categorie-".$category['id']}}">{{$category['name']}}</a></li>
                                           @endforeach
                                         </ul>
                               </div>
                             </div>
                     </div>
                         <!-- Side widget-->
                     </div>
                 </div>
             </div>


        @include('layouts.user-footer')
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script>
   var msg = '{{Session::get('comentariuAdaugat')}}';
   var exist = '{{Session::has('comentariuAdaugat')}}';
   if(exist){
     alert(msg);
   }
  </script>
  </body>
</html>
@else
 <script>window.location = "articole";</script>
 @endif
