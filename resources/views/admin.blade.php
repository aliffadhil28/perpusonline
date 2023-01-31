@extends('layouts.layadmin')

@section('title', 'Dashboard')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Selamat datang, {{auth()->user()->name}}</h1>
@endsection
