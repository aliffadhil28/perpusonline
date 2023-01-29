@extends('layouts.layadmin')


@section('title','buku_anggota')

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Buku Tamu</h1>
<p class="mb-4">Ini adalah buku tamu dari website perpus SMK 5 Kepanjen .</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Buku Tamu</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal_Akses</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal_Akses</th>
                        <th>Kelas</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($gb as $bt)
                        <tr>
                            <td>{{$bt->name}}</td>
                            <td>{{$bt->date}}</td>
                            <td>{{$bt->class}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
</div>
@endsection

