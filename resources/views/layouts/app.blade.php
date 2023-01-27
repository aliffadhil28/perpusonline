<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ config('app.name', 'PerpusOnline') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @notifyCss
    @yield('css')
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="sticky-top bg-white">
        <nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center border-bottom shadow-sm">
            <div class="container p-2">
                <a href="{{ route('index') }}" class="navbar-brand d-flex w-50 me-auto"><img src="{{ asset('img/logo.png') }}" class="navbar-brand-logo" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsingNavbar3">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                    <ul class="navbar-nav w-100 justify-content-center">
                        <li class="nav-item @if (Request::is('/')) active @endif">
                            <a class="nav-link" href="{{ route('index') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal"
                                data-bs-target="#bukuTamuModal">Buku Tamu</a>
                        </li>
                        <li class="nav-item @if (Request::is('katalog*')) active @endif">
                            <a class="nav-link" href="{{ route('katalog') }}">Koleksi Buku</a>
                        </li>
                        <li class="nav-item @if (Request::is('buku-pinjaman*')) active @endif">
                            <a class="nav-link" href="{{ route('buku-pinjaman') }}">Perpustakaan</a>
                        </li>
                    </ul>
                    <div class="nav navbar-nav ms-auto w-100 justify-content-end">
                        <div class="nav-item">
                            <div class="user-menu d-flex">
                                <div class="user-img d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset(auth()->user()->foto_profil) }}" alt="Foto Profil"
                                            class="rounded-circle">
                                    </div>
                                </div>
                                <div class="user-name text-end ms-3">
                                    <h6 class="mb-0 text-gray-600">{{ auth()->user()->name }}</h6>
                                    <p class="mb-0 text-sm text-gray-600">
                                        <a class="me-2" href="{{ route('profil') }}">Profil</a>
                                        <a href="#"
                                            onclick="document.getElementById('form-logout').submit();">Logout</a>
                                    </p>
                                </div>
                                <form id="form-logout" action="{{ route('logout') }}" method="post">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-shrink-0">
        @yield('content')
    </main>

    <footer class="footer mt-auto py-3 bg-white shadow-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <p class="footer-title">About Us</p>
                    <p class="footer-subtitle">{{ config('app.name') }}</p>
                    <p class="footer-description">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable.
                    </p>
                </div>
                <div class="col-0 col-md-1"></div>
                <div class="col-12 col-md-3 d-flex flex-column row-social">
                    <div class="mt-auto justify-content-end">
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-building-columns"></i>
                            </div>
                            <div class="col-11">
                                <p class="footer-address">JL. Cintaku Padamu</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <div class="col-11">
                                <p class="footer-phone">+628xxxxxxxx</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="col-11">
                                <p class="footer-email">mail@smkperpusonline.sch.id
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p class="footer-copy">Copyright &copy; 2022 {{ config('app.name') }}</p>
        </div>
    </footer>

    <!-- Modal Buku Tamu -->
    <div class="modal fade" id="bukuTamuModal" tabindex="-1" aria-labelledby="bukuTamuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container p-5">
                        <div class="buku-tamu-grid">
                            <div class="icon-title">
                                <div class="icon">
                                    <i class="fas fa-book-open fa-2x me-3"></i>
                                </div>
                                <div class="title">
                                    <p class="mb-0 ms-0">Buku Tamu</p>
                                </div>
                                <div class="subtitle">
                                    <p class="mb-0 text-gray-600">Isi buku tamu di bawah ini untuk mengakses fitur
                                        perpus
                                        online</p>
                                </div>
                                <div class="form mt-4">
                                    <form method="POST" action="{{ route('guestbook') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama *</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Nama Lengkap" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="class" class="form-label">Kelas *</label>
                                            <input type="text" class="form-control" name="class"
                                                placeholder="Kelas" required>
                                        </div>
                                        <div class="mb-5">
                                            <label for="date" class="form-label">Tanggal *</label>
                                            <input type="date" class="form-control" name="date" required>
                                        </div>
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary d-block">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x:notify-messages />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    @notifyJs
    @yield('script')
</body>

</html>
