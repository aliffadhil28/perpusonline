@extends('layouts.layadmin')


@section('title','buku_anggota')

@section('content')

<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Log Aktivitas</h1>
<p class="mb-4">Ini adalah log aktivitas yang ada di perpus SMK 5 Kepanjen .</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Log Aktivitas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>waktu_akses</th>
                        <th>Pelaku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>waktu_akses</th>
                        <th>Pelaku</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($logs as $log)
                        <tr>
                            <td>{{$log->log_name}}</td>
                            <td>{{$log->created_at}}</td>
                            <td>{{$log->causer_name}}</td>
                            <td>{{$log->description}}</td>
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
