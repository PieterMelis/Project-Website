<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Antwerpen Studentenstad</title>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <ul class="topNav">
                      <div class="col-xs-2">
                        <a href="../news">
                            <i class="fa fa-newspaper-o " aria-hidden="true"></i>
                        </a>
                      </div>
                      <div class="col-xs-2">
                        <a href="../news">
                          <i class="fa fa-video-camera" aria-hidden="true"></i>
                        </a>
                      </div>
                      <div class="col-xs-2">
                        <a href="../news">
                          <i class="fa fa-map-o " aria-hidden="true"></i>
                        </a>
                      </div>
                      <div class="col-xs-2">
                        <a href="../news">
                          <i class="fa fa-gamepad " aria-hidden="true"></i>
                        </a>
                      </div>
                      <div class="col-xs-2">
                        <a href="../news">
                          <i class="fa fa-info" aria-hidden="true"></i>
                        </a>
                      </div>
                      <div class="col-xs-2">
                        <a href="../news">
                          <i class="fa fa-comments-o " aria-hidden="true"></i>
                        </a>
                      </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><span class="	fa fa-user"></span> Login</a></li>
                            <li><a href="{{ route('register') }}"><span class="fa fa-sign-in"></span> Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu " role="menu">

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
                                    <div class="mNav mNavB text-center">
                                      <li><a href="{{ url('/news') }}">Nieuws</a></li>
                                      <li><a href="{{ url('/news') }}">Testimonials</a></li>
                                      <li><a href="{{ url('/news') }}">Studenten map</a></li>
                                      <li><a href="{{ url('/news') }}">Spel</a></li>
                                      <li><a href="{{ url('/news') }}">Extra info</a></li>
                                      <li><a href="{{ url('/news') }}">Chat</a></li>
                                    </div>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
