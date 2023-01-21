<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi Perpus Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="{{asset('css/style-r.css')}}">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">

  </head>
  <body>
    <section class="register d-flex">
      <div class="register-left w-35 h-100">
        <div class="ellipse"></div>
      </div>
      <img src="{{asset('img/Nomads.png')}}" alt="" class="gambar">
      <div class="register-right w-65 h-100">
        <div class="header">
          <h1>Registrasi</h1>
          <p>Daftarkan dirimu</p>
      </div>
      <div class="form">
        <div class="form">
          <div class="form-group">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukkan nama kamu">
          </div>
          <div class="form-group">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Masukkan Nomormu">
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan email kamu">
          </div>
          <div class="form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Masukkan username">
          </div>
          <div class="form-group">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" aria-describedby="emailHelp" placeholder="Masukkan NIK">
          </div>
          <div class="form-group">
            <label for="notelp" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="notelp" aria-describedby="emailHelp" placeholder="Ex : +6281234567890">
          </div>
          <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Masukkan password">
          </div>
          <div class="form-group">
            <label for="username" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" id="passwordk" aria-describedby="emailHelp" placeholder="Masukkan kembali password">
          </div>
          <div class="form-group">
            <button class="sign-in">Log In</button>
          </div>

        </div>
        <!-- <span class="d-inline text-center">Sudah punya akun? <a href="" class="sign-up d-inline text-decoration-none"> Masuk</a></span> -->
      </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
