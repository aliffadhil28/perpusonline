@extends('layouts.app')

@section('title', 'Koleksi Buku')

@section('content')
    <div class="section-koleksi-buku container mt-5 mb-5">
        <h1 class="text-center text-uppercase mt-5 title">Buku Yang Sedang Dipinjam</h1>
        <h1 class="text-center subtitle">Buku yang sedang anda pinjam dan waktu pengembalian </h1>

        <div class="row mt-5">
            @foreach ($collections as $collection)
                <div class="col-4 card card-book border-0 mb-3">
                    <img src="{{ asset($collection->book->cover) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $collection->book->title }}</h5>
                        <p class="card-text">{{ $collection->book->author }}</p>
                        {!! $collection->formatted_status !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
