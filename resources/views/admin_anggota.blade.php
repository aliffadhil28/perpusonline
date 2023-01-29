@extends('layouts.layadmin')


@section('title', 'buku_anggota')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Daftar User</h1>
    <p class="mb-4">Ini adalah daftar user yang ada di perpus SMK 5 Kepanjen .</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Anggota</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>NIK</th>
                            {{-- <th>Foto_Profil</th> --}}
                            <th>No.Hp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>NIK</th>
                                                <th>Foto_Profil</th>
                                                <th>No.Hp</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </tfoot> --}}
                    <tbody>
                        @foreach ($users as $anggota)
                            <tr>
                                <td>{{ $anggota->name }}</td>
                                <td>{{ $anggota->email }}</td>
                                <td>{{ $anggota->alamat }}</td>
                                <td>{{ $anggota->nik }}</td>
                                <td>{{ $anggota->no_hp }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Hubungi WA
                                                    user</a></li>
                                            <li><a class="dropdown-item" href="#">Edit User</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Delete
                                                    User</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bukuTamuModal">Tambah
                    anggota</a>
            </div>
        </div>
    </div>

    </div>
    </div>
    <!-- modal buku tamu -->
    <div class="modal fade" id="bukuTamuModal" tabindex="-1" aria-labelledby="bukuTamuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container p-5">
                        <div class="buku-tamu-grid">
                            <div class="icon-title">
                                <div class="title">
                                    <h1>Tambah Anggota</h1>
                                </div>
                                <div class="subtitle">

                                </div>
                                <div class="form mt-4">
                                    <form method="POST" action="{{ route('guestbook') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama *</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Nama Lengkap" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="class" class="form-label">Username *</label>
                                            <input type="text" class="form-control" name="Username"
                                                placeholder="Username" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="class" class="form-label">Email *</label>
                                            <input type="text" class="form-control" name="Email" placeholder="Email"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="class" class="form-label">NIK *</label>
                                            <input type="text" class="form-control" name="NIK" placeholder="NIK"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="class" class="form-label">No Telpon*</label>
                                            <input type="number" class="form-control" name="telp"
                                                placeholder="No Telpon" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="class" class="form-label">Alamat*</label>
                                            <input type="text" class="form-control" name="Alamat" placeholder="Alamat"
                                                required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="class" class="form-label">Password *</label>
                                            <input type="text" class="form-control" name="Password"
                                                placeholder="Password" required>
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary d-block">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
