<?php

use App\Http\Controllers\Admin\PeminjamanController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
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
    Route::get('/perpustakaan', [HomeController::class, 'showKatalog'])->name('perpustakaan');
    Route::get('/buku-pinjaman', [HomeController::class, 'showBukuPinjaman'])->name('buku-pinjaman');
    Route::put('/buku-pinjaman/{buku}', [HomeController::class, 'pinjamBuku'])->name('pinjam-buku');

    Route::prefix('admin')->middleware('admin')->group(function () {
        Route::resource('peminjaman', PeminjamanController::class);
        Route::patch('peminjaman/{peminjaman}/return', [PeminjamanController::class, 'return'])->name('peminjaman.return');
        Route::resource('users', AdminUserController::class);
    });
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
})->middleware('admin')->name('admin');

Route::get('/admin_buku_tamu', [HomeController::class,'showGuestBook'])->middleware('admin')->name('admin_buku_tamu');
Route::get('/admin_katalog', [HomeController::class,'showBook'])->middleware('admin')->name('admin_katalog');
Route::post('tambah_buku', [HomeController::class,'storeBook'])->middleware('admin')->name('tambah_buku');
Route::post('/edit_buku/{id}', [HomeController::class,'updateBook'])->middleware('admin')->name('edit_buku');
Route::delete('/delete_buku/{id}', [HomeController::class,'destroyBook'])->middleware('admin')->name('delete_buku');

Route::get('/admin_log_aktivitas', [App\Http\Controllers\HomeController::class, 'showActivity'])->middleware('admin')->name('admin.log');

Route::get('/form_buku_tamu', function () {
    return view('form_buku_tamu');
});
