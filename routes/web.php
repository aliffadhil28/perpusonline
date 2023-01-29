<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::post('guestbook', [HomeController::class, 'storeGuestBook'])->name('guestbook');
    Route::get('/katalog', [HomeController::class, 'showKatalog'])->name('katalog');
    Route::get('/buku-pinjaman', [HomeController::class, 'showBukuPinjaman'])->name('buku-pinjaman');
});

Route::get('/login', [App\Http\Controllers\UserController::class, 'showLogin']);
Route::get('/register', [App\Http\Controllers\UserController::class, 'showRegister']);
Route::get('/profil', [App\Http\Controllers\UserController::class, 'showProfil'])->name('profil');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/profil', [App\Http\Controllers\UserController::class, 'update'])->name('profil.update');

Route::get('/edit_profil', [App\Http\Controllers\UserController::class, 'editProfil']);

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/admin_katalog', function () {
    return view('admin_katalog');
});

Route::get('/admin_anggota', [App\Http\Controllers\HomeController::class,'showUsers'])->name('admin_anggota');
Route::get('/destroy_user', [App\Http\Controllers\UserController::class,'destroyUser'])->name('destroy.users');
Route::get('/admin_buku_tamu', [App\Http\Controllers\HomeController::class,'showGuestBook'])->name('show.gb');

Route::get('/admin_log_aktivitas', [App\Http\Controllers\HomeController::class, 'showActivity'])->name('admin.log');

Route::get('/form_buku_tamu', function () {
    return view('form_buku_tamu');
});
