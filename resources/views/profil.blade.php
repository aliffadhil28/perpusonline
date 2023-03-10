@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom:2%">
        <div class="row" style="margin-top:3%;margin-left:15%;">
            <div class="col-10"
                style="border-radius:20px;background: linear-gradient(90deg, #35EB73 0%, #65DDC7 100%);filter: drop-shadow(8px 4px 35px rgba(56, 125, 130, 0.44));">
                <div class="row">
                    <div class="col-2" style="margin: 3%;margin-top:5%">
                        @if (auth()->user()->foto_profil != null)
                            <img src="{{ asset('storage/foto_profil/'.auth()->user()->foto_profil) }}" width="100" style="border-radius: 20px">
                        @else
                            <img src="{{ auth()->user()->foto_profil }}" alt="Profil" width="100"
                                style="border-radius: 20px">
                        @endif
                        {{-- <img src="{{asset(auth()->user()->foto_profil)}}" width="100" alt="gambar profil" style="border-radius: 20px"> --}}
                    </div>
                    <div class="col-2" style="margin: 3%;">
                        <p style="font-family: 'Montserrat';color: #FFFFFF;font-size:150%">
                            <b>Nama</b>
                        </p>
                        <p style="font-family: 'Montserrat';color: #FFFFFF;font-size:150%">
                            NIK
                        </p>
                        <p style="font-family: 'Montserrat';color: #FFFFFF;font-size:150%">
                            No.Hp
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8"
                style="border-radius:20px;filter: box-shadow: 0 3px 20px rgba(0, 0, 0, .5);background: #FFFFFF;margin-top:5%;margin-left:15%;">
                <div class="row">
                    <div class="col-10">
                        <h1
                            style="margin-left:3%; margin-top:2%;text-align: left;font-family: 'Montserrat'; font-weight: 700; font-size: 28px;line-height: 29px;letter-spacing: 0.17em; color: rgba(0, 0, 0, 0.58);">
                            ABOUT ME
                        </h1>
                    </div>
                    <div class="col-2" style="margin-top:2%;">
                        <a href="edit_profil">
                            <img src="img/edit.png" alt="edit" style="width: 30%;height: 70%;margin-left: 20px;">
                        </a>
                    </div>
                </div>
                <div class="row" style="font-family: 'Montserrat'; font-size: 140%; line-height: 24px;">
                    <div class="col-12" style="margin-left:3%;margin-top:2%">
                        <p>
                            <b> Nama Lengkap</b> <br> {{ auth()->user()->name }}
                        </p>
                    </div>
                    <div class="col-12" style="margin-left:3%;margin-top:2%">
                        <p>
                            <b>Email</b> <br> {{ auth()->user()->email }}
                        </p>
                    </div>
                    <div class="col-12" style="margin-left:3%;margin-top:2%">
                        <p>
                            <b>NIK</b> <br> {{ auth()->user()->nik }}
                        </p>
                    </div>
                    <div class="col-12" style="margin-left:3%;margin-top:2%">
                        <p>
                            <b>No. Hp</b> <br> {{ auth()->user()->no_hp }}
                        </p>
                    </div>
                    <div class="col-12" style="margin-left:3%;margin-top:2%">
                        <p>
                            <b>Alamat</b> <br> {{ auth()->user()->alamat }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
