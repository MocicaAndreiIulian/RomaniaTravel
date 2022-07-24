<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Despre noi</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <style>
    #preview{
        display: flex;
    }
    #preview img{

        height: 85px;
        border-radius: 10px;
        box-shadow: 0 0 8px rgba(0,0,0,0.2);
        opacity: 85%;
    }
    </style>
  </head>
  <body>
    <div class="page">
    <?php echo $__env->make('layouts.user-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Swiper-->
      <!-- Contact information-->
      <!-- Contact Form-->
      <section class="section section-sm section-last bg-default text-left">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Adaugă o noua postare</h3>
            </div>
            <div class="title-classic-text">
              <p>Postarea dumneavoastră va fi accesibilă pe site după aprobare.</p>
            </div>
          </article>
          <form method="post" action="adauga-postare" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row row-14 gutters-14">
              <div class="col-md-12">
                <div class="form-wrap">
                  <input class="form-input" id="title" type="text" name="title" placeholder="Titlu postare" required=""  oninvalid="this.setCustomValidity('Cȃmp necompletat!')" oninput="setCustomValidity('')"  >

                </div>
              </div>
              <div class="col-md-6">
                <div class="form-wrap">
                  <select class="form-input" id="contact-your-name-2" type="text" name="purpose"  required="" oninvalid="this.setCustomValidity('Cȃmp necompletat!')" oninput="setCustomValidity('')"  >
                    <option value="Nespecificat" default>Scopul deplasării (click pentru a selecta)</option>
                      <option value="Din intȃmplare">Din intȃmplare</option>
                    <option value="Relaxare">Relaxare</option>
                  <option value="Muncă">Muncă</option>
                </select>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-wrap">
                  <select class="form-input" id="contact-your-name-2" type="text" name="recommend"  required="" oninvalid="this.setCustomValidity('Cȃmp necompletat!')" oninput="setCustomValidity('')"  >
                    <option value="Neutru" default>Recomandaţi Această locaţie? (click pentru a selecta)</option>
                      <option value="Da">Da</option>
                    <option value="Nu">Nu</option>
                </select>
                </div>
              </div>
              <div class="col-md-12">
            <div class="form-wrap">
              <label class="form-label" for="contact-message-2">Scurtă descriere</label>
              <textarea class="form-input textarea-lg" id="contact-message-2" name="description"  required="" oninvalid="this.setCustomValidity('Cȃmp necompletat (minim 10 caractere)!')" oninput="setCustomValidity('')"   minlength="10" maxlength="300"></textarea>
            </div>
          </div>

              <div class="col-md-12">
                <div class="form-wrap">
                    <h5>Imagine principala:</h5>
                    <input class="form-input" id="imgInp" type="file" name="image" accept="image/*"  required=""  oninvalid="this.setCustomValidity('Selectaţi o imagine!')" oninput="setCustomValidity('')" />
                    <p style="text-align: center"><img style="height: 300px" id="blah" src="images/600x366.jpg" alt="your image"  height="200px" /></p>

                </div>
              </div>
                  <div class="col-md-12">
                  <div class="form-wrap">
      <h5>Caută Locatia:</h5>
    <div style="min-height:350px">
  			<div id="latlong">
  				<input id="pac-input" class="controls" name="locations" type="text" placeholder="Caută locația">
  				<input type="text" id="latbox" name="latbox" placeholder="latitudine" class="controls" name="lat" readonly>
  				<input type="text" id="lngbox" name="lngbox" placeholder="longitudine" class="controls" name="lng" readonly>
  			</div>
  			<div id="map-canvas"></div>
  		</div>
</div>

              <div class="col-12">
                <h5>Continut postare:</h5>
                  <textarea class="ckeditor" id="content" name="content"  data-constraints="@Required"></textarea>

              </div>

              <div >
              <label>Alegeți imagini</label>
              <input id="file-input" name="images[]" type="file" accept="image/*" multiple>
<div class="counter-classic-number" id="preview">
</div>
              </div>
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Adaugă Postare</button>
          </form>
        </div>
      </section>
        <?php echo $__env->make('layouts.user-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
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




    <script>
    function previewImages() {

    var preview = document.querySelector('#preview');

    if (this.files) {
      [].forEach.call(this.files, readAndPreview);
    }

    function readAndPreview(file) {

      // Make sure `file.name` matches our extensions criteria
      if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
        return alert(file.name + " is not an image");
      } // else...

      var reader = new FileReader();

      reader.addEventListener("load", function() {
        var image = new Image();
        image.height = 100;
        image.title  = file.name;
        image.src    = this.result;
        preview.appendChild(image);
      });

      reader.readAsDataURL(file);

    }

  }


  document.querySelector('#file-input').addEventListener("change", previewImages);
    </script>

    <script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
    <script src="js/core.min.js"></script>
    <script src="plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
  <script>
   var msg = '<?php echo e(Session::get('eroareBD')); ?>';
   var exist = '<?php echo e(Session::has('eroareBD')); ?>';
   if(exist){
     alert(msg);
   }
 </script>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\romania-travel\resources\views/adauga-postare.blade.php ENDPATH**/ ?>