<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PerpusOnline') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="background-color:rgba(239, 239, 239, 1);
">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-item" href="{{ url('/') }}">
                    <img src="img/Heading 4.png" alt="PERPUS" style="width: 100%;height:100%">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard" style="margin-left: 25px;font-size: 150%;font-family: 'Montserrat';font-style: normal;color: #111827;">{{ __('Beranda') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/buku_tamu" style="margin-left: 25px;font-size: 150%;font-family: 'Montserrat';font-style: normal;color: #111827;">{{ __('Buku Tamu') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/koleksi_buku" style="margin-left: 25px;font-size: 150%;font-family: 'Montserrat';font-style: normal;color: #111827;">{{ __('Koleksi Buku') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/perpustakaan" style="margin-left: 25px;font-size: 150%;font-family: 'Montserrat';font-style: normal;color: #111827;">{{ __('Perpustakaan') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        <img src="img/Registerr.png" alt="Daftar">
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <img src="img/Loginn.png" alt="Masuk">
                                </a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profil">
                                        {{ __('Profil') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

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
    <footer class="d-flex py-3 border-top" style="background-color:#FFFF">
        <div class="align-items-center ml-3">
            <div class="container">
                <p style="font-family: 'Montserrat'; font-weight: 500; font-size: 24px; display: flex; color: #0F172A; ">
              About Us
                </p>
                <p style="font-family: 'Montserrat';
                      font-style: normal;
                      font-weight: 500;
                      font-size: 20px;
                      line-height: 135%;
                      ">
                Perpus SMK 5 Kepanjen
                </p>
                <div class="row">
                    <div class="col-5">
                    <p style="font-family: 'Montserrat';
                            font-style: normal;
                            font-weight: 400;
                            font-size: 20px;
                            line-height: 32px;
                            color: #0F172A;
                            ">
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form, by injected humour,
                        or randomised words which don't look even slightly believable.
                    </p>
                    </div>
                    <div class="social-links text-md-right pt-3 pt-md-0"">
                            <a><img src="img/library.png"></a><a> JL. Cintaku Padamu </a>
                            <a><img src="img/Vector.png"></a><a> +628xxxxx </a>
                            <a><img src="img/mail.png"></a><a> mail@smkperpusonline.sch.id </a>
                      </div>
                </div>
                <div>
                    <img src="img/Vector 5.png">
                </div>
                <span class="text-muted">Copyright © 2023 Perpus SMK 5 Kepanjen</span>
            </div>
        </div>
    </footer>
</body>
</html>
