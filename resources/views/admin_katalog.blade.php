@extends('layouts.layadmin')


@section('title','buku_anggota')

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
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th>Edisi</th>
                        <th>Jumlah</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>Terpopuler</td>
                        <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                            id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <ul class="dropdown-menu"
                                                            aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item" href="#">Edit Katalog</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Delete
                                                                    Katalog</a></li>
                                                        </ul>
                                                    </div>
                                                </td>            
                    </tr>
                
                </tbody>
            </table>
            <a href="#" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#bukuTamuModal">Tambah Katalog</a>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
</div>

<div class="modal fade" id="bukuTamuModal" tabindex="-1" aria-labelledby="bukuTamuModalLabel" aria-hidden="true">
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
                                    <form method="POST" action="{{ route('guestbook') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Judul Buku *</label>
                                            <input type="text" class="form-control" name="judul"
                                                placeholder="Judul Buku" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Author *</label>
                                            <input type="text" class="form-control" name="Author"
                                                placeholder="Author" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Publisher *</label>
                                            <input type="text" class="form-control" name="Publisher"
                                                placeholder="Publisher" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Tahun *</label>
                                            <input type="number" class="form-control" name="Tahun"
                                                placeholder="Tahun" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Edisi *</label>
                                            <input type="number" class="form-control" name="Edisi"
                                                placeholder="Edisi" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Jumlah *</label>
                                            <input type="number" class="form-control" name="Jumlah"
                                                placeholder="Jumlah" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Kategori *</label>
                                            <input type="text" class="form-control" name="Kategori"
                                                placeholder="Kategori" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="name" class="form-label">Cover *</label>
                                            <input type="file" class="form-control" name="Cover"
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