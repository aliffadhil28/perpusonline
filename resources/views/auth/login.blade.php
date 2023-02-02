<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="x-icon" href="{{ asset('img/logo.png') }}">
    <title>Login Perpus Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">

</head>

<body>

    <section class="login d-flex">
        <div class="login-left w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="header">
                            <h1>Halo!</h1>
                            <p>Masuk Ke Perpus Online</p>
                        </div>
                        <div class="login-form-e">
                            <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="login-form-p">
                            <input type="password" id="exampleInputPassword1" placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none text-right" href="{{ route('password.request') }}">
                                    {{ __('Lupa Password?') }}
                                </a>
                            @endif
                            <button type="submit" class="sign-in btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            <!-- <span>Belum punya akun?</span> -->

                        </div>
                    </form>

                </div>
                <div class="text-center">
                    <span class="d-inline text-center">Belum punya akun?
                        <a href="{{ route('register') }}" class="sign-up d-inline text-decoration-none">
                            Daftar Sekarang
                        </a>
                    </span>
                </div>

            </div>
        </div>
        <!-- GAMBAR -->
        <div class="login-right w-50 h-100">
            <div class="container">
                <div class="ellipse"></div>
                <img src="{{ asset('img/Nomads-Sitting 1.png') }}">
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
