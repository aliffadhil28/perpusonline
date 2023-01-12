<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/katalog', function () {
    return view('katalog_buku');
});

Route::get('/katalog', function () {
    return view('katalog_buku');
});

Route::get('/buku_pinjaman', function () {
    return view('buku_dipinjam');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/edit_profil', function () {
    return view('edit_profil');
});

Route::get('/admin', function () {
    return view('admin');
});
