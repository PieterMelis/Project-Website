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
                          <li class="mNavB">
                            <a href="{{ url('/home') }}">Dashboard</a>
                          </li>
                          <li class="text-center">
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                          <div class="mNav mNavB">
                            <li><a href="{{ url('/news') }}">Nieuws</a></li>
                            <li><a href="{{ url('/news') }}">Testimonials</a></li>
                            <li><a href="{{ url('/map') }}">Studenten map</a></li>
                            <li><a href="{{ url('/news') }}">Spel</a></li>
                            <li><a href="{{ url('/info') }}">Extra info</a></li>
                            <li><a href="{{ url('/news') }}">Chat</a></li>
                          </div>

                        @else
                          <div class="mNav mNavB text-center">
                            <li><a href="{{ url('/news') }}">Nieuws</a></li>
                            <li><a href="{{ url('/news') }}">Testimonials</a></li>
                            <li><a href="{{ url('/map') }}">Studenten map</a></li>
                            <li><a href="{{ url('/news') }}">Spel</a></li>
                            <li><a href="{{ url('/info') }}">Extra info</a></li>
                            <li><a href="{{ url('/news') }}">Chat</a></li>
                          </div>
                          <li>
                            <a href="{{ url('/login') }}"><span class="	fa fa-user"></span> Login</a>
                          </li>
                          <li>
                            <a href="{{ url('/register') }}"><span class="fa fa-sign-in"></span> Register</a>
                          </li>
                        @endif
                    </div>
                @endif
              </ul>
          </div>
      </div>
  </nav>

  <!-- Indicators -->
  <ol class="carousel-indicators">
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
                  <div class="col-sm-2">
                    <a href="/news"><div class="icon"><i class="fa fa-newspaper-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Nieuws</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/video"><div class="icon"><i class="fa fa-video-camera fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Video's</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/map"><div class="icon"><i class="fa fa-map-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Kaart</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/game"><div class="icon"><i class="fa fa-gamepad fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Spel</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/info"><div class="icon"><i class="fa fa-info fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Info</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/chat"><div class="icon"><i class="fa fa-comments-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Chat</h4>

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
                  <div class="col-sm-2">
                    <a href="/news"><div class="icon"><i class="fa fa-newspaper-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Nieuws</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/video"><div class="icon"><i class="fa fa-video-camera fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Video's</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/map"><div class="icon"><i class="fa fa-map-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Kaart</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/game"><div class="icon"><i class="fa fa-gamepad fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Spel</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/info"><div class="icon"><i class="fa fa-info fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Info</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/chat"><div class="icon"><i class="fa fa-comments-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Chat</h4>

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
                  <div class="col-sm-2">
                    <a href="/news"><div class="icon"><i class="fa fa-newspaper-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Nieuws</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/video"><div class="icon"><i class="fa fa-video-camera fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Video's</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/map"><div class="icon"><i class="fa fa-map-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Kaart</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/game"><div class="icon"><i class="fa fa-gamepad fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Spel</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/info"><div class="icon"><i class="fa fa-info fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Info</h4>
                  </div>
                  <div class="col-sm-2">
                    <a href="/chat"><div class="icon"><i class="fa fa-comments-o fa-4x" aria-hidden="true"></i></div></a>
                    <h4>Chat</h4>

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
  <!-- Page Header -->
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Laatste nieuws</h1>
      </div>
  </div>
 <!-- Projects Row -->
 <div class="row">
   @if (isset($approvedArticles[0]))
     <div class="col-md-6 portfolio-item">

         <a href="article/{{ $approvedArticles[0]->id }}">
           <div class="item">
            <img class="img-responsive" src="../storage/app/{{$approvedArticles[0]->link1}}" alt="">
          </div>
         </a>
        <h3>
           <a href="article/{{ $approvedArticles[0]->id }}">{{ $approvedArticles[0]->title}}</a>
       </h3>
         <p>{{ $approvedArticles[0]->excerpt}}</p>

     </div>
   @endif
   @if (isset($approvedArticles[1]))
     <div class="col-md-6 portfolio-item">
         <a href="article/{{ $approvedArticles[1]->id }}" >
            <div class="item">
             <img class="img-responsive" src="../storage/app/{{$approvedArticles[1]->link1}}" alt="">
            </div>
         </a>
         <h3>
             <a href="article/{{ $approvedArticles[1]->id }}">{{ $approvedArticles[1]->title}}</a>
         </h3>
         <p>{{ $approvedArticles[1]->excerpt}}</p>
     </div>
    @endif
 </div>

 <div class="row">
  @if (isset($approvedArticles[2]))
     <div class="col-md-6 portfolio-item">
         <a href="article/{{ $approvedArticles[2]->id }}">
             <img class="img-responsive" src="../storage/app/{{$approvedArticles[2]->link1}}" alt="">
         </a>
         <h3>
             <a href="article/{{ $approvedArticles[2]->id }}">{{ $approvedArticles[2]->title}}</a>
         </h3>
         <p>{{ $approvedArticles[2]->excerpt}}</p>
     </div>
  @endif
  @if (isset($approvedArticles[3]))
     <div class="col-md-6 portfolio-item">
         <a href="article/{{ $approvedArticles[3]->id }}">
             <img class="img-responsive" src="../storage/app/{{$approvedArticles[3]->link1}}" alt="">
         </a>
         <h3>
            <a href="article/{{ $approvedArticles[3]->id }}">{{ $approvedArticles[3]->title}}</a>
         </h3>
         <p>{{ $approvedArticles[3]->excerpt}}</p>
     </div>
  @endif
 </div>

</div>


<footer class="foos">
  <div class="container">
    <div class="col-md-4 text-center">
      <h3>Contacteer de stad</h3>
      <h6>Stedelijk contactcenter</h6>
      <h6>tel. 03 22 11 333</h6>
      <h6><a href="#">info@stad.antwerpen.be</a></h6>
    </div>
    <div class="col-xs-4 col-xs-offset-4 portfolio-item  text-center">
      <h3>Volg stad Antwerpen</h3>
      <div class="col-sm-3"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></div>
      <div class="col-sm-3"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></div>
      <div class="col-sm-3"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></div>
      <div class="col-sm-3"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></div>
    </div>
  </div>
</footer>
</div>



<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
