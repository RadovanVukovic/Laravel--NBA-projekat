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
    <script src="https://kit.fontawesome.com/d9baa8bc11.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/logo.png" alt="" style="width: 100px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/games"><h5> Utakmice </h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/standings"><h5> Tabela </h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/schedule"><h5> Raspored </h5></a>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/teams"><h5> Timovi </h5></a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-3" style="height: 100%" >
                            <form method="POST" action="/games/play">
                                @method('PUT')
                                @csrf

                                <input type="submit" class="btn-primary btn" value="ODIGRAJ UTAKMICU">
                            </form>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/manager/{{Auth::user()->id}}">
                                        {{ __('Profil') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Odjavi se') }}
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
            <div class="container-fluid">
                <div class="container col-md-10 col-sm-12 col-12">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small pt-4" style="background-color: #385d7a; color: white;">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mx-auto">

                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Projekat NBA lige</h5>
                    <p>U ovom projektu se nalazi simulacija igranja kosarkaskih utakmica. Logika obuhvata 10 timova,
                        50 kosarkasa, tabelu lige, raspored utakmica, transfere igraca i menadzere klubova.
                        Za svaku odigranu utakmicu se izracunava statistika klubova i igraca, menja se raspored i tabela lige
                        a takodje se evidentira i uspeh svakog igraca koji se koristi za kreiranje All Star tima i tabele top 10 kosarkasa lige.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">KOSARKASI</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="/players"  style="color: white">Svi igraci</a>
                        </li>
                        <li>
                            <a href="/players/free"  style="color: white">Slobodni igraci</a>
                        </li>
                        <li>
                            <a href="/players/top-10"  style="color: white">Top 10 </a>
                        </li>
                        <li>
                            <a href="/players/all-star"  style="color: white">All Star tim </a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">TIMOVI</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="/teams"  style="color: white">Svi NBA timovi</a>
                        </li>
                        <li>
                            <a href="/standings"  style="color: white">Tabela lige</a>
                        </li>
                        <li>
                            <a href="/games"  style="color: white">Odigrane utakmice</a>
                        </li>
                        <li>
                            <a href="/schedule"  style="color: white">Raspored utakmica</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->

                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <hr>



        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-dribbble"> </i>
                </a>
            </li>
        </ul>
        <!-- Social buttons -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a style="color: white;" href="#"> RADOVAN VUKOVIC S20/18</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>
</html>
