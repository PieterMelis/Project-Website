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
    </head>
    <body>
      <div class="full">
        <nav class="navbar navbar-inverse  " role="navigation">
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
                          <div class="nav navbar-nav navbar-right">
                              @if (Auth::check())
                                <li>
                                  <a href="{{ url('/home') }}">Home</a>
                                </li>
                              @else
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
        <div class="container">
          <div class="bigNav">
            <form role="form">
              <div class="row">
                <div class="col-xs-12">
                  <div class="input-group input-group-lg">
                      <input type="text" class="form-control" />
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><span class="	fa fa-search"></span></button>
                    </div>
                  </div>
                  <div class="row icon portfolio-item center">
                    <div class="col-sm-2"><img class="img-responsive" src="img/icon.png" alt=""></div>
                    <div class="col-sm-2"><img class="img-responsive" src="img/icon.png" alt=""></div>
                    <div class="col-sm-2"><img class="img-responsive" src="img/icon.png" alt=""></div>
                    <div class="col-sm-2"><img class="img-responsive" src="img/icon.png" alt=""></div>
                    <div class="col-sm-2"><img class="img-responsive" src="img/icon.png" alt=""></div>
                    <div class="col-sm-2"><img class="img-responsive" src="img/icon.png" alt=""></div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>

<div class="container homeContent">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Laatste nieuws
                </h1>
            </div>
        </div>
       <!-- Projects Row -->
       <div class="row">
         @if (isset($approvedArticles[0]))
           <div class="col-md-6 portfolio-item">
               <a href="article/{{ $approvedArticles[0]->id }}">
                   <img class="img-responsive" src="img/700x400.jpg" alt="">
               </a>
               <h3>
                   <a href="article/{{ $approvedArticles[0]->id }}">{{ $approvedArticles[0]->title}}</a>
               </h3>
               <p>{{ $approvedArticles[0]->excerpt}}</p>

           </div>
         @endif
         @if (isset($approvedArticles[1]))
           <div class="col-md-6 portfolio-item">
               <a href="article/{{ $approvedArticles[1]->id }}">
                   <img class="img-responsive" src="img/700x400.jpg" alt="">
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
                   <img class="img-responsive" src="img/700x400.jpg" alt="">
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
                   <img class="img-responsive" src="img/700x400.jpg" alt="">
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
    <div class="col-md-6 portfolio-item fo">
      <h1>Contacteer de stad</h1>
      <li>een</li>
      <li>twee</li>
      <li>drie</li>
      <li>vier</li>
    </div>
    <div class="col-md-6 portfolio-item fo">
      <h1>Volg stad Antwerpen</h1>
      <li>icon</li>
      <li>icon</li>
      <li>icon</li>
      <li>icon</li>
    </div>
  </div>
</footer>




<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
