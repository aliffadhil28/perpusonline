@extends('layouts.app')

@section('content')
    <div class="container"  style="box-shadow: 0 3px 20px rgba(0, 0, 0, .5); border-radius: 10px; background-color: white; padding: 15px; position: relative;font-family:'Montserrat'; width:50%; padding-left: 10%;">
        <div>
            <img src="img/LogoBuku.png">
            <h1>Buku Tamu</h1>
            <p>Isi Buku Tamu di bawah ini untuk mengakses fitur perpus online</p>
        </div>

        <div style="border-radius: 5px;">
            <form action="" method="post" enctype="multipart/form-data">@csrf
                <div>
                    <div>
                        <label for="nama">Nama *</label>
                    </div>
                    <textarea style="
                        width: 80%;
                        height: 55px;
                        padding: 12px 20px;
                        box-sizing: border-box;
                        border: 2px solid #ccc;
                        border-radius: 4px;
                        background-color: rgba(58, 58, 58, 0.09);
                        font-size: 16px;
                        resize: none;
                    " name="deskripsi">Masukkan Nama Anda..</textarea>
                </div>

                <div>
                    <label for="kelas">Kelas *</label>
                </div>
                <div>
                    <select id="kelas" name="kelas"
                    style="
                        width: 80%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                        background: rgba(58, 58, 58, 0.09);
                    ">
                        <option value="Olimpiade">XII A MIPA</option>
                        <option value="Karya Tulis">XII B MIPA</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div>
                    <label for="tanggal">Tanggal</label>
                </div>
                <div>
                    <input type="datetime-local"  
                    style="
                        width: 80%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                        background: rgba(58, 58, 58, 0.09);
                    ">
                </div>
                
                <input type="submit" value="Submit" class="btn btn-primary"
                style="
                    background: #0C61F7;
                    margin-top: 20px;
                    border: 1px solid #000000 box-shadow:
                    0px 4px 4px 0px #00000040;
                    box-shadow: 0px 4px 4px 0px #00000040;
                    width: 80%; border-radius:5px
                    margin-top:20%;
                    margin-bottom:5%;
                ">
            </form>
        </div>
    </div>
@endsection
