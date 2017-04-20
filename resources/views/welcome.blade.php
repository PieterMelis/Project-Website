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
                    <div class="col-sm-2"><img class="img-responsive" src="../img/icon.png" alt=""></div>
                    <div class="col-sm-2"><img class="img-responsive" src="../img/icon.png" alt=""></div>
                    <div class="col-sm-2"><img class="img-responsive" src="../img/icon.png" alt=""></div>
                    <div class="col-sm-2"><img class="img-responsive" src="../img/icon.png" alt=""></div>
                    <div class="col-sm-2"><img class="img-responsive" src="../img/icon.png" alt=""></div>
                    <div class="col-sm-2"><img class="img-responsive" src="../img/icon.png" alt=""></div>
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
           <div class="col-md-6 portfolio-item">
             <h3>
                 <h3>News 1</h3>
             </h3>
               <a href="#">
                   <img class="img-responsive" src="img/700x400.jpg" alt="">
               </a>

               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
               <i class="fa fa-plus"></i> <a href="#">Meer lezen</a>
               <br>
           </div>
           <div class="col-md-6 portfolio-item">
             <h3>
                 <h3>News 2</h3>
             </h3>
               <a href="#">
                   <img class="img-responsive" src="img/700x400.jpg" alt="">
               </a>

               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
               <i class="fa fa-plus"></i> <a href="#">Meer lezen</a>
               <br>
           </div>
           <div class="col-md-6 portfolio-item">
             <h3>
                 <h3>News 3</h3>
             </h3>
               <a href="#">
                   <img class="img-responsive" src="img/700x400.jpg" alt="">
               </a>

               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
               <i class="fa fa-plus"></i> <a href="#">Meer lezen</a>
               <br>
           </div>
           <div class="col-md-6 portfolio-item">
             <h3>
                 <h3>News 4</h3>
             </h3>
               <a href="#">
                   <img class="img-responsive" src="img/700x400.jpg" alt="">
               </a>

               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
               <i class="fa fa-plus"></i> <a href="#">Meer lezen</a>
               <br>
           </div>
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
