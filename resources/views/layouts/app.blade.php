<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name', 'iLovePizza')}}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="https://cdn-icons-png.flaticon.com/128/3595/3595455.png" width="40px">    iLovePizza
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Tipi di Pizze</a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('fabio',['tipologia'=>'tutte'])}}">Tutte</a>
                                <a class="dropdown-item" href="{{route('fabio',['tipologia'=>'napoletana'])}}">Napoletana</a>
                                <a class="dropdown-item" href="{{route('fabio',['tipologia'=>'romana'])}}">Romana</a>
                                <a class="dropdown-item" href="{{route('fabio',['tipologia'=>'resto'])}}">Resto dell'Italia</a>
                                <a class="dropdown-item" href="{{route('fabio',['tipologia'=>'internazionale'])}}">Internazionale</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('consigli') }}">Consigli</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('associazioni') }}">Associazioni</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username}}

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>



                                    <!--funzioni di Utente-->
                                    <a class="dropdown-item" href="{{route('homepage')}}">Crea Associazione</a>

                                    <!--funzioni di Membro-->
                                    <a class="dropdown-item" href="{{route('homepage')}}">La mia Associazione</a>
                                    <a class="dropdown-item" href="{{route('homepage')}}">Scrivi ricetta</a>
                                    <a class="dropdown-item" href="{{route('homepage')}}">Scrivi consiglio</a>

                                    <!--funzioni di Moderatore-->
                                    <a class="dropdown-item" href="{{route('homepage')}}">Modera Contenuti</a>

                                    <!--funzioni di Capo-->
                                    <a class="dropdown-item" href="{{route('homepage')}}">Modera Membri</a>
                                    <a class="dropdown-item" href="{{route('homepage')}}">Invita membro</a>



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
</body>
</html>