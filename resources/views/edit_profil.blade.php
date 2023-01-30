@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom:2%">
        <div class="row" style="margin-top:3%;">
            <div class="col-7"
                style=";border-radius:20px;background: linear-gradient(90deg, #35EB73 0%, #65DDC7 100%);filter: drop-shadow(8px 4px 35px rgba(56, 125, 130, 0.44));">
                <div class="row">
                    <div class="col-2" style="margin: 3%;margin-top:5%">
                        @if (auth()->user()->foto_profil != null)
                            <img src="{{ asset('default_profil/profil.png') }}" width="100" style="border-radius: 20px">
                        @else
                            <img src="{{ auth()->user()->foto_profil }}" alt="Profil" width="100"
                                style="border-radius: 20px">
                        @endif
                        {{-- <img src="{{asset(auth()->user()->foto_profil)}}" width="100" alt="gambar profil" style="border-radius: 20px"> --}}
                    </div>
                    <div class="col-5" style="margin: 3%;margin-top:12.5%">
                        <p style="font-family: 'Montserrat';color: #FFFFFF;font-size:150%">
                            <b>Nama</b>
                        </p>
                        <p style="font-family: 'Montserrat';color: #FFFFFF;margin-top:-20%;font-size:125%">
                            NIK
                        </p>
                        <p style="font-family: 'Montserrat';color: #FFFFFF;margin-top:-20%;font-size:125%">
                            No.Hp
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-7"
                style="margin-left:%; border-radius:20px;filter: box-shadow: 0 3px 20px rgba(0, 0, 0, .5);background: #FFFFFF;margin-top:5%;">
                <div class="row">
                    <div class="col-10">
                        <h1
                            style="margin-left:3%; margin-top:5%;text-align: left;font-family: 'Montserrat'; font-weight: 700; font-size: 28px;line-height: 29px;letter-spacing: 0.17em; color: rgba(0, 0, 0, 0.58);">
                            ABOUT ME
                        </h1>
                    </div>
                </div>
                <div class="row" style="font-family: 'Montserrat'; font-size: 140%; line-height: 24px;">
                    <form action="{{route("profil.update")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('put') --}}
                        <div class="col-10" style="margin-left:3%;margin-top:3%">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" id="nama" aria-describedby="emailHelp"
                                placeholder="Masukkan nama anda" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ auth()->user()->name  }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-10" style="margin-left:3%">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ auth()->user()->email }}" required autocomplete="email"
                                placeholder="Masukkan email anda">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-10" style="margin-left:3%">
                            <label for="nik" class="form-label">NIK</label>
                            <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror"
                                name="nik" value="{{ auth()->user()->nik }}" required autocomplete="nik"
                                placeholder="Masukkan NIK">

                            @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-10" style="margin-left:3%">
                            <label for="no_hp" class="form-label">Nomor Telepon</label>
                            <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                name="no_hp" value="{{ auth()->user()->no_hp  }}" required autocomplete="nik"
                                placeholder="Ex : +6281234567890">

                            @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-10" style="margin-left:3%">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" id="text" aria-describedby="emailHelp"
                                placeholder="Masukkan alamat anda"
                                class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                aria-describedby="emailHelp" value="{{ auth()->user()->alamat }}" required autocomplete="alamat"
                                autofocus>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-10" style="margin-left:3%">
                            <label for="foto_profil" class="form-label">Foto Profil</label>
                            <input type="file" name="foto_profil" class="form-control" id="foto_profil">

                            @error('foto_profil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary"
                            style="background: linear-gradient(90deg, #35EB73 0%, #65DDC7 100%);filter: drop-shadow(8px 4px 35px rgba(56, 125, 130, 0.44));width: 20%; margin-top:25%;margin-bottom:5%; margin-left:75%;border-radius:30px">
                            Simpan
                        </button>
                    </form>
                </div>
                <a href="">

                </a>
            </div>
            <div class="col-4"
                style="border-radius:20px;filter: box-shadow: 0 3px 20px rgba(0, 0, 0, .5);background: #FFFFFF;margin-left:5%;margin-top:5%">
                <h1
                    style="margin-left:3%; margin-top:5%;text-align: center;font-family: 'Montserrat'; font-weight: 700; font-size: 28px;line-height: 29px;letter-spacing: 0.17em; color: rgba(0, 0, 0, 0.58);">
                    BUKU YANG SEDANG DIPINJAM
                </h1>
                <div>
                    <img src="img/Group 2246.png" alt="coba" style="margin-top: 5%; margin-left: 30%">
                </div>
                <div>
                    <img src="img/Group 2246.png" alt="coba" style="margin-top: 5%; margin-left: 30%">
                </div>
            </div>
        </div>
    </div>
@endsection
