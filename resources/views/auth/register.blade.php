<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="x-icon" href="{{ asset('img/logo.png') }}">
    <title>Registrasi Perpus Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="{{ asset('css/style-r.css') }}">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">

</head>

<body>
    <section class="register d-flex">
        <div class="register-left w-35 h-100">
            <div class="ellipse"></div>
        </div>
        <img src="{{ asset('img/Nomads.png') }}" alt="" class="gambar">
        <div class="register-right w-65 h-100">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="header">
                    <h1>Registrasi</h1>
                    <p>Daftarkan dirimu</p>
                </div>
                <div class="form">
                    <div class="form">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" id="nama" aria-describedby="emailHelp"
                                placeholder="Masukkan nama anda"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" id="text" aria-describedby="emailHelp"
                                placeholder="Masukkan alamat anda"
                                class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                aria-describedby="emailHelp" value="{{ old('alamat') }}" required autocomplete="alamat"
                                autofocus>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Masukkan email anda">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input id="username" type="text"
                                class="form-control @error('username') is-invalid @enderror" name="username"
                                value="{{ old('username') }}" required autocomplete="username"
                                placeholder="Masukkan username">

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nik" class="form-label">NIK</label>
                            <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror"
                                name="nik" value="{{ old('nik') }}" required autocomplete="nik"
                                placeholder="Masukkan NIK">

                            @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="form-label">Nomor Telepon</label>
                            <input id="no_hp" type="text"
                                class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                                value="{{ old('no_hp') }}" required autocomplete="nik"
                                placeholder="Ex : +6281234567890">

                            @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="Masukkan password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="form-label">Konfirmasi Password</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Masukkan kembali password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="sign-in btn btn-primary">
                                {{ __('Register') }}
                            </button>

                        </div>
                            <div class="form-group">
                            <a href="{{ route('login') }}">Kembali</a>
                            </div>
                    </div>
                    <!-- <span class="d-inline text-center">Sudah punya akun? <a href="" class="sign-up d-inline text-decoration-none"> Masuk</a></span> -->
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
