@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom:2%">
        <div class="row" style="margin-top:3%;">
            <div class="col-7" style=";border-radius:20px;background: linear-gradient(90deg, #35EB73 0%, #65DDC7 100%);filter: drop-shadow(8px 4px 35px rgba(56, 125, 130, 0.44));">
                <div class="row">
                    <div class="col-2" style="margin: 3%;margin-top:5%">
                        <img src="img/profil.png" alt="gambar profil">
                    </div>
                    <div class="col-2" style="margin: 3%;margin-top:5%">
                        <p style="font-family: 'Montserrat';color: #FFFFFF;font-size:150%">
                            <b>Nama</b>
                        </p>
                        <p style="font-family: 'Montserrat';color: #FFFFFF;margin-top:-20%;font-size:125%">
                            Jurusan
                        </p>
                        <p style="font-family: 'Montserrat';color: #FFFFFF;margin-top:-20%;font-size:125%">
                            Instansi
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-7" style="margin-left:%; border-radius:20px;filter: box-shadow: 0 3px 20px rgba(0, 0, 0, .5);background: #FFFFFF;margin-top:5%;">
                <div class="row">
                    <div class="col-10">
                        <h1 style="margin-left:3%; margin-top:5%;text-align: left;font-family: 'Montserrat'; font-weight: 700; font-size: 28px;line-height: 29px;letter-spacing: 0.17em; color: rgba(0, 0, 0, 0.58);">
                            ABOUT ME
                        </h1>
                    </div>
                    <div class="col-2" style="margin-top:2%;">
                        <a href="edit_profil">
                            <img src="img/edit.png" alt="edit" style="width: 50%;height: 100%;">
                        </a>
                    </div>
                </div>
                <div class="row" style="font-family: 'Montserrat'; font-size: 140%; line-height: 24px;">
                    <div class="col-10" style="margin-left:3%;margin-top:3%">
                        <p>
                            <b> Nama Lengkap</b> <br> Enrico Indra Sakti
                        </p>
                    </div>
                    <div class="col-10" style="margin-left:3%">
                        <p>
                            <b>Email</b> <br> enrico@gmail.com
                        </p>
                    </div>
                    <div class="col-10" style="margin-left:3%">
                        <p>
                            <b>Domisili</b> <br> Kediririri
                        </p>
                    </div>
                    <div class="col-10" style="margin-left:3%">
                        <p>
                            <b>Asal Instansi</b> <br> YUEM
                        </p>
                    </div>
                    <div class="col-10" style="margin-left:3%">
                        <p>
                            <b>Jenjang Pendidikan</b><br> S3
                        </p>
                    </div>
                    <div class="col-10" style="margin-left:3%">
                        <p>
                            <b>Kelas/Semester</b> <br> 3
                        </p>
                    </div>
                    <div class="col-10" style="margin-left:3%">
                        <p>
                            <b>No. Telepon</b> <br> 081xxxx
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4" style="border-radius:20px;filter: box-shadow: 0 3px 20px rgba(0, 0, 0, .5);background: #FFFFFF;margin-left:5%;margin-top:5%">
                <h1 style="margin-left:3%; margin-top:5%;text-align: center;font-family: 'Montserrat'; font-weight: 700; font-size: 28px;line-height: 29px;letter-spacing: 0.17em; color: rgba(0, 0, 0, 0.58);">
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
