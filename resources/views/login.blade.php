<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="x-icon" href="{{ asset('img/logo.png') }}">
    <title>Login Perpus Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">

  </head>
  <body>

    <section class="login d-flex">
        <div class="login-left w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">

                    <div class="header">
                        <h1>Halo!</h1>
                        <p>Masuk Ke Perpus Online</p>
                    </div>
                    <div class="login-form-e">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">
                    </div>
                    <div class="login-form-p">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                        <a href="" class="text-decoration-none text-right">Lupa Password?</a>
                        <button class="sign-in">Log In</button>
                       <span>Belum punya akun?</span>

                    </div>
                </div>
                <div class="text-center">
                    <span class="d-inline text-center">Belum punya akun? <a href="" class="sign-up d-inline text-decoration-none"> Daftar Sekarang</a></span>

                </div>

                </div>
            </div>
           <!-- GAMBAR -->
        <div class="login-right w-50 h-100">
            <div class="container">
        </div>


    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

