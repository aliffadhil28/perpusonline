@extends('layouts.layadmin')


@section('title', 'buku_anggota')

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Katalog Buku</h1>
        <p class="mb-4">Ini adalah katalog buku yang ada di perpus SMK 5 Kepanjen .</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Katalog Buku</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul Buku</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Edisi</th>
                                <th>Jumlah</th>
                                <th>Kategori</th>
                                <th>Cover</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($book as $buku)
                                <tr>
                                    <td>{{ $buku->title }}</td>
                                    <td>{{ $buku->author }}</td>
                                    <td>{{ $buku->publisher }}</td>
                                    <td>{{ $buku->year }}</td>
                                    <td>{{ $buku->edition }}</td>
                                    <td>{{ $buku->quantity }}</td>
                                    <td>{{ $buku->category }}</td>
                                    <td><img src="{{ asset('storage/covers/' . $buku->cover) }}" alt="Cover"></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#editBukuModal">Edit Katalog</a>
                                                <li><a class="dropdown-item" href="#"
                                                        onclick="event.preventDefault();
                                                    document.getElementById('delete-book-{{ $buku->id }}').submit();">
                                                        Delete Buku
                                                    </a>

                                                    <form id="delete-book-{{ $buku->id }}"
                                                        action="{{ route('delete_buku', $buku->id) }}" method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form></a>
                                                </li>
                                                {{-- <li>
                                                    <form action="{{ route('delete_buku', $buku->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-link ">Delete Buku</button>
                                                    </form> --}}
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bukuModal">Tambah
                        Katalog</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    </div>

    <div class="modal fade" id="bukuModal" tabindex="-1" aria-labelledby="bukuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container p-5">
                        <div class="buku-tamu-grid">
                            <div class="icon-title">
                                <div class="title">
                                    <h1>Tambah Katalog Buku</h1>
                                </div>
                                <div class="subtitle">

                                </div>
                                <div class="form mt-4">
                                    <form method="POST" action="{{ route('tambah_buku') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Judul Buku *</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Judul Buku" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="author" class="form-label">Author *</label>
                                            <input type="text" class="form-control" name="author" placeholder="Author"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="publisher" class="form-label">Publisher *</label>
                                            <input type="text" class="form-control" name="publisher"
                                                placeholder="Publisher" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="year" class="form-label">Tahun *</label>
                                            <input type="string" class="form-control" name="year" placeholder="Tahun"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edition" class="form-label">Edisi *</label>
                                            <input type="text" class="form-control" name="edition" placeholder="Edisi"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="quantity" class="form-label">Jumlah *</label>
                                            <input type="number" class="form-control" name="quantity" placeholder="Jumlah"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Kategori *</label>
                                            <input type="text" class="form-control" name="category"
                                                placeholder="Kategori" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="cover" class="form-label">Cover *</label>
                                            <input type="file" class="form-control" name="cover"
                                                placeholder="Cover">
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

    <div class="modal fade" id="editBukuModal" tabindex="-1" aria-labelledby="editBukuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container p-5">
                        <div class="buku-tamu-grid">
                            <div class="icon-title">
                                <div class="title">
                                    <h1>Edit Katalog Buku</h1>
                                </div>
                                <div class="subtitle">

                                </div>
                                <div class="form mt-4">
                                    <form method="POST" action="{{ route('edit_buku', ['id' => $buku->id]) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Judul Buku *</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Judul Buku" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="author" class="form-label">Author *</label>
                                            <input type="text" class="form-control" name="author"
                                                placeholder="Author" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="publisher" class="form-label">Publisher *</label>
                                            <input type="text" class="form-control" name="publisher"
                                                placeholder="Publisher" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="year" class="form-label">Tahun *</label>
                                            <input type="string" class="form-control" name="year"
                                                placeholder="Tahun" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edition" class="form-label">Edisi *</label>
                                            <input type="text" class="form-control" name="edition"
                                                placeholder="Edisi" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="quantity" class="form-label">Jumlah *</label>
                                            <input type="number" class="form-control" name="quantity"
                                                placeholder="Jumlah" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Kategori *</label>
                                            <input type="text" class="form-control" name="category"
                                                placeholder="Kategori" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="cover" class="form-label">Cover *</label>
                                            <input type="file" class="form-control" name="cover"
                                                placeholder="Cover">
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

    <x:notify-messages />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
@endsection
