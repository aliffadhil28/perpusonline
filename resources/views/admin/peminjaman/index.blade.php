@extends('layouts.layadmin')


@section('title', 'Peminjaman')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Daftar Peminjaman</h1>
    <p class="mb-4">Ini adalah daftar peminjaman yang ada di perpus SMK 5 Kepanjen .</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Peminjaman</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjaman as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->book->title }}</td>
                                <td>{{ $item->borrowed_at }}</td>
                                <td>{{ $item->returned_at }}</td>
                                <td>{!! $item->formatted_status !!}</td>
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
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambahPeminjaman">Tambah
                    Peminjaman</a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tambahPeminjaman" tabindex="-1" role="dialog" aria-labelledby="tambahPeminjamanLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahPeminjamanLabel">Tambah Peminjaman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('peminjaman.store') }}" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nama</label>
                            <select class="form-control" name="user_id" id="user_id" required>
                                <option value="">Pilih Pengguna</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Buku</label>
                            <select class="form-control" name="book_id" id="book_id" required>
                                <option value="">Pilih Buku</option>
                                @foreach ($books as $book)
                                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="borrowed_at">Tanggal Peminjaman</label>
                            <input type="date" class="form-control" id="borrowed_at" name="borrowed_at" required>
                        </div>
                        <div class="form-group">
                            <label for="returned_at">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="returned_at" name="returned_at" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
