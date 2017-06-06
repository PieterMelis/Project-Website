<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Antwerpen Studentenstad</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/master.css') }}" rel="stylesheet">
        <link href="{{ asset('css/heroheader.css') }}" rel="stylesheet">

    </head>
    <body>
    <!--  <div class="full">-->



    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="8000" id="bs-carousel">
    <nav class="navbar navbar-inverse none-margin" role="navigation">
      <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Antwerpen Studentenstad</a>
          </div>
          <div class="collapse navbar-collapse nav navbar-nav navbar-right" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                @if (Route::has('login'))
                    <div class="nav navbar-nav navbar-right mNavAll">
                        @if (Auth::check())
                          <div class="mNav mNavB">
                            <li><a href="{{ url('news') }}">Nieuws</a></li>
                            <li><a href="{{ url('video') }}">Video's</a></li>
                            <li><a href="{{ url('map') }}">Kaart</a></li>
                            <li><a href="{{ url('news') }}">Spel</a></li>
                            <li><a href="{{ url('info') }}">Info</a></li>
                          </div>
                          <li class="mNavB">
                            <a href="{{ url('/home') }}">Dashboard</a>
                          </li>
                          <li class="text-center mNavB">
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>


                        @else
                          <div class="mNav mNavB text-center">
                            <li><a href="{{ url('news') }}">Nieuws</a></li>
                            <li><a href="{{ url('video') }}">Video's</a></li>
                            <li><a href="{{ url('map') }}">Kaart</a></li>
                            <li><a href="{{ url('news') }}">Spel</a></li>
                            <li><a href="{{ url('info') }}">Info</a></li>

                          </div>
                            <li>
                              <a href="{{ url('/login') }}"><span class="	fa fa-user"></span> Login</a>
                            </li>

                        @endif
                    </div>
                @endif
              </ul>
          </div>
      </div>
  </nav>

  <!-- Indicators -->
  <ol class="carousel-indicators balls">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">

        <hgroup>
            <h1>Studeren in Antwerpen</h1>
            <h3>Het hoger onderwijs heeft een aparte structuur en een eigen systeem. Hier vind je de regels die gelden voor alle hoger onderwijsinstellingen in Vlaanderen.</h3>
        </hgroup>
        <a href="https://www.gate15.be/nl/content/wegwijs" target="blank" class="btn btn-hero btn-lg" >Meer</a>
        <div class="bigNav">
          <form role="form">
            <div class="row">
              <div class="col-xs-12">

                <div class="row icons portfolio-item">
                  <div class="col-sm-2 col-sm-offset-1">
                    <a href="news"><div class="icon"><i class="fa fa-newspaper-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Nieuws</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="video"><div class="icon"><i class="fa fa-video-camera fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Video's</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="map"><div class="icon"><i class="fa fa-map-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Kaart</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="spel"><div class="icon"><i class="fa fa-gamepad fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Spel</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="info"><div class="icon"><i class="fa fa-info fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Info</h4>
                  </div>


                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">

        <hgroup>

            <h1>Op zoek naar een kot ?</h1>
            <h3>Woon je te ver van de stad om te pendelen of heb je gewoon goesting om echt op je eigen benen te staan? Dan ga je op kot. </h3>
        </hgroup>
        <a href="https://www.gate15.be/nl/content/kot" target="blank" class="btn btn-hero btn-lg" >Meer</a>
        <div class="bigNav">
          <form role="form">
            <div class="row">
              <div class="col-xs-12">

                <div class="row icons portfolio-item">
                  <div class="col-sm-2 col-sm-offset-1">
                    <a href="news"><div class="icon"><i class="fa fa-newspaper-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Nieuws</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="video"><div class="icon"><i class="fa fa-video-camera fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Video's</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="map"><div class="icon"><i class="fa fa-map-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Kaart</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="game"><div class="icon"><i class="fa fa-gamepad fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Spel</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="info"><div class="icon"><i class="fa fa-info fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Info</h4>
                  </div>

                </div>
              </div>
            </div>
          </form>
        </div>


      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">

        <hgroup>

            <h1>Studentenjobs</h1>
            <h3>Je komt naar Antwerpen om te studeren en te ontspannen.  Helaas zijn leuke activiteiten en gezellige plekjes vaak iets duurder, en dus heb je extra cash nodig...</h3>
        </hgroup>
        <a href="https://www.gate15.be/nl/content/studentenjob" target="blank" class="btn btn-hero btn-lg" >Meer</a>
        <div class="bigNav">
          <form role="form">
            <div class="row">
              <div class="col-xs-12">

                <div class="row icons portfolio-item">
                  <div class="col-sm-2 col-sm-offset-1">
                    <a href="news"><div class="icon"><i class="fa fa-newspaper-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Nieuws</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="video"><div class="icon"><i class="fa fa-video-camera fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Video's</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="map"><div class="icon"><i class="fa fa-map-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Kaart</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="game"><div class="icon"><i class="fa fa-gamepad fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Spel</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="info"><div class="icon"><i class="fa fa-info fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Info</h4>
                  </div>


                </div>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>


<div class="homeContent container">



<div class="masonry2">
  @foreach ($approvedArticles as $article)
  @if ($article->picture_url == "")

<div class="item">
  <div class="col-md-6 art ">
@if(strtoupper($article->type) == 'TESTIMONIAL')
      <a href="video/{{ $article->id }}">

@else
      <a href="article/{{ $article->id }}">
        @endif
        @if(strtoupper($article->type) == 'TESTIMONIAL')
          <video src="storage/{{ $article->link1 }}"></video>
        @else
          <img class="img-responsive " src="storage/{{$article->link1}}" alt="">
          @endif
      </a>
      <div class="text">
        <h3>
           {{ $article->title}}
       </h3>
         <p>{{ $article->excerpt}}</p>
         <div class="more">
           <i class="fa fa-plus" aria-hidden="true"></i>
           @if(strtoupper($article->type) == 'TESTIMONIAL')
           <a href="video/{{ $article->id }}">  Lees meer</a>

           @else
           <a href="article/{{ $article->id }}">  Lees meer</a>
           @endif
         </div>
      </div>
    </div>
</div>
  @else
  <div class="item">
  <div class="col-md-6 art ">

      <a href="articleGate/{{ $article->id}}">
          <img class="img-responsive " src="{{$article->picture_url}}" alt="">
      </a>
      <div class="text">
        <h3>
           {{ $article->title}}
       </h3>
         <p>{{ $article->published_on}} - {{ $article->author }}</p>
         <div class="more">
           <i class="fa fa-plus" aria-hidden="true"></i><a href="articleGate/{{ $article->id }}">  Lees meer</a>
         </div>
      </div>
    </div>
</div>
  @endif
 @endforeach
</div>



</div>


<footer class="foos">
  <div class="container">
    <div class="col-md-4 text-center">
      <h3>Contacteer Antwerpen</h3>
      <h5>Stedelijk contactcenter</h5>
      <h5>tel. 03 22 11 333</h5>
      <h5><a href="#">info@stad.antwerpen.be</a></h5>
    </div>
    <div class="col-xs-4 col-xs-offset-4 portfolio-item  text-center">
      <h3>Volg Antwerpen</h3>
      <div class="col-sm-3"><a href="https://www.facebook.com/stad.antwerpen" rel=canonical><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a></div>
      <div class="col-sm-3"><a href="https://twitter.com/Stad_Antwerpen" rel=canonical><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a></div>
      <div class="col-sm-3"><a href="https://www.instagram.com/stad_antwerpen/" rel=canonical><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></div>
      <div class="col-sm-3"><a href="https://www.linkedin.com/company/stad-antwerpen" rel=canonical><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a></div>
    </div>
  </div>
  <div class="rights">
    <h5>Copyright © 2017 Stamp. All rights reserved. </h5>
  </div>
</footer>

</div>



<!-- jQuery -->
<script src="js/jquery.js"></script>
<script type="text/javascript">
$(".col-sm-2").hover(
function () {
  $(this).addClass("result_hover");
},
function () {
  $(this).removeClass("result_hover");
}
);
</script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
