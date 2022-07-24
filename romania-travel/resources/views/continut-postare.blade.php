@if($locations[0]->approve == 1 OR Auth::user()->type ==1 OR isset(Auth::user()->id) AND Auth::user()->id === $locations[0]->userId )
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Vizualizare Postare</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <style type="text/css">
	#pac-input, #latlong input {

    background-color: #fff;
    padding: 0 11px 0 13px;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    text-overflow: ellipsis;

}
#pac-input {

    width: 50%;

}
.controls {

    margin-top: 16px;
    border: 1px solid transparent;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    height: 32px;
    outline: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);

}

#map-canvas {
    width: 100%;
    height: 350px;
    padding: 0px;
    float: left;
}
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
                         @foreach($locations as $location)
                         <article>
                             <!-- Post header-->
                             <header class="mb-4">
                                 <!-- Post title-->
                                 <h3 class="fw-bolder mb-1">{{$location -> title}}</h3>
                                 <!-- Post meta content-->
                                 <div class="text-muted fst-italic mb-2">Postat pe {{$location -> created_at}} de {{$location -> userName}}</div>

                                 <!-- Post categories-->


                             </header>
                             <!-- Preview image figure-->
                             <figure class="mb-4"><img class="img-fluid rounded" src="{{'Images/Post/'.$location->image}}" alt="..." /></figure>
                             <!-- Post content-->
                             <section class="mb-5">
                                <html>{!! ($location->content) !!}</html>


                             </section>

                             <section class="mb-5">
                               <h5>Locatie: {{$location->location}} </h5>
                               <br>
                               <div style="min-height:350px">
                                   <div id="latlong">
                                     <input id="pac-input" class="controls" value="{{$location->location}}"  name="locations" type="hidden" placeholder="Caută locaţia">
                                     <input type="hidden" id="latbox" value="{{$location->lat}}" name="latbox" placeholder="latitudine" class="controls" name="lat" readonly>
                                     <input type="hidden" id="lngbox" value="{{$location->lng}}"  name="lngbox" placeholder="longitudine" class="controls" name="lng" readonly>
                                   </div>
                                   <div id="map-canvas"></div>
                                 </div>

                             </section>

                             <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
                               <div class="container-fluid">
                                 <h6 class="gallery-title">Galerie</h6>
                                 <!-- Owl Carousel-->
                                 <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">

                                   @foreach($galleries as $gallery)
                                   <div class="owl-item">
                                     <!-- Thumbnail Classic-->
                                     <article class="thumbnail thumbnail-mary">
                                       <div class="thumbnail-mary-figure"><img src="{{'Images/Post/'.$gallery['image']}}" alt="" width="420" height="308"/>
                                       </div>
                                       <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{'Images/Post/'.$gallery['image']}}" data-lightgallery="item"><img src="images/gallery-image-16-420x308.jpg" alt="" width="420" height="308"/></a>
                                       </div>
                                     </article>

                                   </div>
                                   @endforeach
                                 </div>
                               </div>
                             </section>

                         </article>
                         @endforeach
                         <!-- Comments section-->

                     </div>
                     <!-- Side widgets-->
                     <div class="col-lg-4">
                         <!-- Search widget-->
                         <div class="card mb-4">
                             <div class="card-header">Caută</div>
                             <div class="card-body">
                               <form action="cauta-postare" method="POST">
                                 @csrf
                                 <div class="input-group">
                                     <input class="form-control" name="locations" type="text" placeholder="Caută o postare..." aria-label="Caută un articol..." aria-describedby="button-search" />
                                     <button class="btn btn-primary" id="button-search" name="search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                 </div>
                               </form>
                             </div>
                         </div>


                         <!-- Categories widget-->
                         <div class="card mb-4">
                             <div class="card-header">Alte detalii</div>
                             <div class="card-body">
                                 <div class="row">


                                            <p style="text-align: center"><b>Scopul deplasării: {{$locations[0]-> purpose}}</b></p>
                                             <p style="text-align: center"><b>Utilizatorul recomandă locaţia: {{$locations[0]-> recommend}}</b></p>


                                 </div>
                             </div>
                         </div>
                         <div class="card mb-4">
                        <div class="d-flex justify-content-center">
                          @if(isset(Auth::user()->id))
                             <div class="p-4">
                               <form method="POST" action="usefulPost">
                                 @csrf
                                 @if(isset($reactionId[0]->id))
                                 <input type="hidden" value="{{$reactionId[0]->id}}" name="reactionId">
                                 @endif
                                 <input type="hidden" value="{{$locations[0]->id}}" name="locationId">
                                 @if($usefulCheck > 0)
                               <button value="0" class="btn" style=" background-color: #FFFFFF"><p title="Apreciază postarea" style="color: blue; font-size: 30px" ><i class="fa fa-thumbs-up" aria-hidden="true"></i></p></button>
                               @else
                               <button value="1" class="btn" style=" background-color: #FFFFFF"><p title="Apreciază postarea" style="font-size: 30px" ><i class="fa fa-thumbs-up" aria-hidden="true"></i></p></button>
                               @endif
                             </form>
                             </div>
                             <div class="p-4">
                                  <form method="POST" action="uselessPost">
                                    @csrf
                                     @if(isset($reactionId[0]->id))
                                    <input type="hidden" value="{{$reactionId[0]->id}}" name="reactionId">
                                    @endif
                               <input type="hidden" value="{{$locations[0]->id}}" name="locationId">
                              @if($uselessCheck > 0)
                             <button value="0" class="btn" style=" background-color: #FFFFFF"><p  title="Nu iţi place această postare?" style="color: red;  font-size: 30px" ><i class="fa fa-thumbs-down" aria-hidden="true"></i></p></button>
                              @else
                              <button value="1" class="btn" style=" background-color: #FFFFFF"><p  title="Nu iţi place această postare?" style="font-size: 30px" ><i class="fa fa-thumbs-down" aria-hidden="true"></i></p></button>
                              @endif
                           </form>
                           </div>
                           @endif
                         </div>
                         <p><b>Reacţii Pozitive: {{$statistics['usefulReactions']}}</b></p>
                         <p><b>Reacţii Negative: {{$statistics['uselessReactions']}}</b></p>
                         <br><br>
                         <!-- Side widget-->
                     </div>
                 </div>


                 </div>
                  @if(isset(Auth::user()->id))
                 <form method="post" action="addOpinion">
                   @csrf
                   <div class="row row-14 gutters-14">
                        <h4 >Adaugă o opinie despre postare:</h4>
                     <div class="col-12">
                       <div class="form-wrap">
                         <input type="hidden" name="locationId" value="{{$locations[0]->id}}" >
                         <input type="hidden" name="userId" value="{{ Auth::user()->id }}" >

                         <textarea class="form-input textarea-lg"  name="comment" required=""  oninvalid="this.setCustomValidity('Cȃmp necompletat!')" oninput="setCustomValidity('')"></textarea>
                       </div>
                     </div>
                   </div>
                   <div class="d-flex justify-content-between">
                       <div>

                       </div>
                       <div>
                         <br>
                         <button class="btn btn-primary" type="submit">Adaugă opinia</button>
                       </div>
                  </div>

                 </form>
               @else
               <br>
               <h5>Trebuie să fii conectat pentru a adăuga un comentariu.</h5>
               @endif
                 <br><br>

                 @foreach($opinions as $opinion)
                 <div class="d-flex mb-4">
                     <!-- Parent comment-->

                     <div class="flex-shrink-0">


                        @if(!empty($opinion -> userPicture) AND $opinion -> userPicture != ' ' )
            <img class="rounded-circle" src="{{'Images/User/'.$opinion -> userPicture}}" width="50" alt="..." />

                             @else


                       <img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" width="50" alt="..." />
                        @endif
                     </div>
                     <div class="ms-3">
                         <div class="fw-bold"><b>{{$opinion -> userName }}</b></div>
{{$opinion -> comment }}                                           <!-- Child comment 1-->

             </div>
         </div>
         <br><br>
         @endforeach

             </div>


        @include('layouts.user-footer')
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?&libraries=places&key=AIzaSyA0xkgZsAcpZ5hSn7_JS3ZOrTQgi3D2kI4&"></script>

    <script type="text/javascript">
      function initialize() {

      if ( $( "#map-canvas" ).length ) {
        // Google MAP
        var start = new google.maps.LatLng(19.434678882285688, -99.18805345504768);
        var marker;
        var map;
        var input = (document.getElementById('pac-input'));
        var getdata = (document.getElementById('latlong'));
        var latbox = document.getElementById('latbox');
        var lngbox = document.getElementById('lngbox');

        var searchBox;

          var mapOptions = {
              zoom: 16,
              center: start
          };

          map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
          searchBox = new google.maps.places.SearchBox((input));
          marker = new google.maps.Marker({
              map:map,
              draggable:true,
              animation: google.maps.Animation.DROP,
              position: start
          });

          google.maps.event.addListener(marker, 'dragend', function(event) {
              var latlang = marker.getPosition().lat()+","+marker.getPosition().lng();
              updateposition(latlang);
          });

          map.controls[google.maps.ControlPosition.TOP_LEFT].push(getdata);

          if ((latbox.value.length > 0 ) && (lngbox.value.length > 0)) {
              setfirst(Number(latbox.value), Number(lngbox.value));
          }

          google.maps.event.addListener(searchBox, 'places_changed', function() {
              var places = searchBox.getPlaces();

              if (places.length == 0) {
                return;
              }

              for (var i = 0, place; place = places[i]; i++) {
                  marker.setPosition(place.geometry.location);
                  map.setCenter(place.geometry.location);
                  updateposition();
              }
          });
      }

      function updateposition(){
          latbox.value = marker.getPosition().lat();
          lngbox.value = marker.getPosition().lng();
      }


      function setfirst(latvar, lngvar){
          map.setCenter({lat: latvar, lng: lngvar});
          marker.setPosition({lat: latvar, lng: lngvar});
      }
    }

    initialize();

    </script>


    <script src="https://maps.googleapis.com/maps/api/js?&libraries=places&key=AIzaSyA0xkgZsAcpZ5hSn7_JS3ZOrTQgi3D2kI4&"></script>

    <script type="text/javascript">
      function initialize() {

      if ( $( "#map-canvas" ).length ) {
        // Google MAP
        var start = new google.maps.LatLng(44.439663, 26.096306);
        var marker;
        var map;
        var input = (document.getElementById('pac-input'));
        var getdata = (document.getElementById('latlong'));
        var latbox = document.getElementById('latbox');
        var lngbox = document.getElementById('lngbox');

        var searchBox;

          var mapOptions = {
              zoom: 16,
              center: start
          };

          map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
          searchBox = new google.maps.places.SearchBox((input));
          marker = new google.maps.Marker({
              map:map,
              draggable:true,
              animation: google.maps.Animation.DROP,
              position: start
          });

          google.maps.event.addListener(marker, 'dragend', function(event) {
              var latlang = marker.getPosition().lat()+","+marker.getPosition().lng();
              updateposition(latlang);
          });

          map.controls[google.maps.ControlPosition.TOP_LEFT].push(getdata);

          if ((latbox.value.length > 0 ) && (lngbox.value.length > 0)) {
              setfirst(Number(latbox.value), Number(lngbox.value));
          }

          google.maps.event.addListener(searchBox, 'places_changed', function() {
              var places = searchBox.getPlaces();

              if (places.length == 0) {
                return;
              }

              for (var i = 0, place; place = places[i]; i++) {
                  marker.setPosition(place.geometry.location);
                  map.setCenter(place.geometry.location);
                  updateposition();
              }
          });
      }

      function updateposition(){
          latbox.value = marker.getPosition().lat();
          lngbox.value = marker.getPosition().lng();
      }


      function setfirst(latvar, lngvar){
          map.setCenter({lat: latvar, lng: lngvar});
          marker.setPosition({lat: latvar, lng: lngvar});
      }
    }

    initialize();

    </script>
  </body>
</html>
@else
 <script>window.location = "recenzii-locatii";</script>
 @endif
