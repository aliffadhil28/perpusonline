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

Route::get('/login', [App\Http\Controllers\UserController::class, 'showLogin']);
Route::get('/register', [App\Http\Controllers\UserController::class, 'showRegister']);
Route::get('/profil', [App\Http\Controllers\UserController::class, 'showProfil'])->name('profil');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/katalog', function () {
    return view('katalog_buku');
});

Route::get('/katalog', function () {
    return view('katalog_buku');
});

Route::post('/profil', [App\Http\Controllers\UserController::class, 'update'])->name('profil.update');

Route::get('/buku_pinjaman', function () {
    return view('buku_dipinjam');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/edit_profil', [App\Http\Controllers\UserController::class, 'editProfil']);

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/admin_katalog', function () {
    return view('admin_katalog');
});

Route::get('/admin_anggota', [App\Http\Controllers\UserController::class,'showUsers']);

Route::get('/admin_buku_tamu', function () {
    return view('admin_buku_tamu');
});

Route::get('/admin_log_aktivitas', function () {
    return view('admin_log_aktivitas');
});

Route::get('/form_buku_tamu', function () {
    return view('form_buku_tamu');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
