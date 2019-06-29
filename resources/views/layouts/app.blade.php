<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Group Binarios') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>
<!--barra de navegacion--->

<nav class="navbar navbar-expand-lg  navbar-light  shadow-sm fixed-top " style="background-color: #c1c1ca;">
    <a class="navbar-brand " href="{{ url('/') }}"> <img src="/img/logo.png" style='width:160px' ;></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse  " id="navbarSupportedContent">


        <!-- Left Side Of Navbar -->


        <div>
            <ul class=" navbar-nav mr-auto justify-content-center pull-xs-right">
                <li class="nav-item active">
                    <a class="nav-link  " href="{{ url('/') }}">
                        Inicio </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="{{ url('/productos') }}">Productos</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="{{ url('/servicios') }}">Servicios</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="{{ url('/cotizar') }}">Cotizar</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="#">Webmail</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="http://soporte.groupbinarios.co/scp">Soporte</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="{{url('/contact-us')}}">Contactanos</a>
                </li>

                @guest



                    @if (Route::has('register'))

                    @endif
                    <form class="form-inline">
                        <input class="form-control mr-sm-10" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary my-10 my-sm-10" type="submit">Buscar</button>
                    </form>
                @else
                    <div class="nav-item dropdown">
                        <button id="dropdownMenuButton" class="btn btn-light dropdown-toggle " style="font-size:18px"
                                href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                v-pre>
                            <i class="fa fa-user"></i> {{ Auth::user()->name }} </button>
                        <span class="caret"></span>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                <i class="fa fa-sign-out-alt" style="font-size:18px"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>


                    </div>
                @endguest
            </ul>
        </div>
    </div>






    <!-- Right Side Of Navbar -->

    <!-- Authentication Links -->



</nav>

<main class="py-4">
    @yield('content')
</main>
</div>
</body>
</html>
