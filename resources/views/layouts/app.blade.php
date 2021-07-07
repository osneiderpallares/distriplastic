<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
        
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <!--Menú desplegable -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto pull-right">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                                    {{ Auth::user()->username }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">                                                                    
                                    <a class="dropdown-item" href="">
                                        Perfil
                                    </a>

                                    <a class="dropdown-item" href="#">
                                        Cambiar contraseña
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>                              
                            </li>                   
                        @endguest                        
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

 <!-- Footer -->
        <footer class="page-footer font-small teal pt-4">
            <div class="p-3 mb-2 bg-dark text-white">
            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">
              <!-- Grid row -->
              <div class="row">
                <!-- Grid column -->
                <div class="col-md-4 mt-md-0 mt-3">
                  <!-- Content -->
                  <h5 class="text-uppercase text-white">Redes sociales</h5>


                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-10">
                    <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-10">
                    <a href=""><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-10">
                    <a href=""><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-10">
                    <a href=""><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-10">
                    <a href=""><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>



                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none pb-3">
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase  text-white">Encuentranos</h5>
                    <ul class="list-unstyled">
                      Transversal 25A #18E-10
                      Barrio FUndadores
                      Valledupar-Cesar
                      (57)+ 5 5712243
                      www.plasticos25.com
                    </ul>
                  </div>
                  <!-- Grid column -->
                  <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase  text-white">Acerca de nosotros</h5>
                    <ul class="list-unstyled">
                      <P ALIGN="justify">El colegio xxxxx, es una institución Académica Bilingüe, ubicada en la ciudad de Valledupar Resolución 0298 de 2019, Secretaría de Educación Municipal.</P>
                    </ul>
                  </div>
                  <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
            <!-- Footer Links -->
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2021 Copyright:
              <a href=""> Plásticos la 25</a>
            </div>
            <!-- Copyright -->
        </div>         
</footer>
          <!-- Footer -->


    </body>
</html>   