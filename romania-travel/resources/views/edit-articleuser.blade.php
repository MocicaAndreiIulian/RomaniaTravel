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
  </head>
  <body>

    <div class="page">

    @include('layouts.user-nav')
      <!-- Swiper-->

      <!-- Contact information-->


      <!-- Contact Form-->
      <section class="section section-sm section-last bg-default text-left">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Editează articolul</h3>
            </div>
            <div class="title-classic-text">
              <p>Articolul dumneavoastră va fi accesibil pe site după aprobare.</p>
            </div>
          </article>
          <form method="post" action="updateUserArticle" enctype="multipart/form-data">
            @csrf
            <div class="row row-14 gutters-14">
              <div class="col-md-12">
                <div class="form-wrap">
                  <input class="form-input" id="title" value="{{$articles[0]->id}}"  required="" type="hidden" name="id" placeholder="Titlu articol" data-constraints="@Required">

                  <input class="form-input" id="title" value="{{$articles[0]->title}}"  required="" type="text" name="title" placeholder="Titlu articol" data-constraints="@Required">

                </div>
              </div>
              <div class="col-md-12">
                <div class="form-wrap">
                  <h5>Categorie articol:</h5>
                  <select class="form-control" name="categoryId">
                    <option value="{{$articles[0]->joinIdCategory}}">Categoria actuală: {{$articles[0]->joinNameCategory}}</option>
                      @foreach($categories as $category)
                          <option value="{{$category['id']}}">{{$category['name']}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
                <div class="col-md-12">
              <div class="form-wrap">
                <label class="form-label" for="contact-message-2">Scurtă descriere</label>
                <textarea class="form-input textarea-lg" id="contact-message-2" name="description" required="" oninvalid="this.setCustomValidity('Cȃmp necompletat (minim 10 caractere)!')" oninput="setCustomValidity('')" minlength="10" maxlength="300">{{$articles[0]->description}}</textarea>
              </div>
            </div>
              <div class="col-md-12">
                <div class="form-group">
                  <h5>Imagine articol:</h5>
                <input class="form-input" id="imgInp" type="file" name="image"  >
                          <br>
                    <p style="text-align: center"><img style="height: 300px" id="blah" src="images/Article/{{$articles[0]->image}}" alt="your image"  height="200px" /></p>
                    <input type="hidden" value="{{$articles[0]->image}}" name="imageText" required=""  oninvalid="this.setCustomValidity('Selectaţi o imagine!')" oninput="setCustomValidity('')">

                </div>

              </div>
              <div class="col-12">
                <h5>Conținut articol:</h5>
                  <textarea class="ckeditor" id="content" name="content"  required=""   oninvalid="this.setCustomValidity('Camp necompletat!')" oninput="setCustomValidity('')">  {{$articles[0]->content}}</textarea>

              </div>
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Salvează Articol</button>
          </form>
        </div>
      </section>


        @include('layouts.user-footer')
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
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
