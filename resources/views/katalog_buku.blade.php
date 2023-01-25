@extends('layouts.app')

@section('title', 'Koleksi Buku')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="section-koleksi-buku container mt-5 mb-5">
        <h1 class="text-center text-uppercase mt-5 title">Katalog Buku</h1>
        <h1 class="text-center subtitle">Kumpulan buku yang bisa dipinjam di PerpusOnline ada di bawah ini</h1>

        <div class="container mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <form action="" method="get">
                        <div class="input-group">
                            <div class="input-group-prepend d-flex">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" name="q" class="form-control"
                                placeholder="Cari Nama Buku Yang Anda Ingin Pinjam" value="{{ request()->q ?? '' }}">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-80px">
                @if (\Request::has('q') && \Request::get('q') != '')
                    <div class="row">
                        @foreach ($books as $book)
                            <div class="col-2 card card-book border-0 mb-3">
                                <img src="{{ asset($book->cover) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $book->title }}</h5>
                                    <p class="card-text">{{ $book->author }}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-outline-secondary">Detail Buku</a>
                                    <a href="#" class="btn btn-primary">Pinjam</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h1 class="text-center text-book-category">Buku Terpopuler</h1>
                    <div class="splide mt-5" role="group" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach ($randomBooks as $book)
                                    <li class="splide__slide">
                                        <div class="card card-book border-0">
                                            <img src="{{ asset($book->cover) }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $book->title }}</h5>
                                                <p class="card-text">{{ $book->author }}</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-outline-secondary">Detail Buku</a>
                                                <a href="#" class="btn btn-primary">Pinjam</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @foreach ($categories as $category)
                        <h1 class="text-center text-book-category mt-5">Buku {{ $category->category }}</h1>
                        <div class="splide mt-5" role="group" aria-label="Splide Basic HTML Example">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @foreach ($books->where('category', $category->category)->take(15) as $book)
                                        <li class="splide__slide">
                                            <div class="card card-book border-0">
                                                <img src="{{ asset($book->cover) }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $book->title }}</h5>
                                                    <p class="card-text">{{ $book->author }}</p>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="#" class="btn btn-outline-secondary">Detail Buku</a>
                                                    <a href="#" class="btn btn-primary">Pinjam</a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        var elms = document.getElementsByClassName('splide');

        for (var i = 0; i < elms.length; i++) {
            new Splide(elms[i], {
                type: 'loop',
                pagination: false,
                gap: '1rem',
                interval: 3000,
                perPage: 6,
                perMove: 1,
                autoplay: true,
                breakpoints: {
                    640: {
                        perPage: 1,
                    },
                },
            }).mount();
        }
    </script>
@endsection
