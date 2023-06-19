<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Penjual\ProdukController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\RegisterController;
use App\Http\Livewire\Sidebar\Penjual;
use Illuminate\Support\Facades\Route;

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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/detail-product', function () {
    return view('detailProduct');
});
Route::get('/beli-produk', function () {
    return view('beli-produk');
});
Route::get('/detail-toko', function () {
    return view('detailToko');
});
Route::get('/wedding-organizer', function () {
    return view('weddingOrganizer');
});
Route::get('/makanan-minuman', function () {
    return view('makananMinuman');
});
Route::get('/fashion', function () {
    return view('fashionKategori');
});
Route::resource('/profile-user', profileController::class);
Route::get('/pertanian-kategori', function () {
    return view('pertanianKategori');
});
Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::prefix('/super-admin')->middleware('auth')->group(function() {
    Route::get('/', function () {
        return view('superadmin.index');
    });
    Route::get('/pesanan', function () {
        return view('superadmin.pesanan');
    });
    Route::get('/laporan', function () {
        return view('superadmin.laporan');
    });
});


// Routing penjual 
Route::prefix('penjual')->middleware('auth')->group(function() {
    Route::get('/', function () {
        return view('penjual.index');
    });
    Route::get('/keranjang', function () {
        return view('penjual.keranjang');
    });
    Route::get('/pesanan', function () {
        return view('penjual.pesanan');
    });
    Route::get('penjualan', function () {
        return view('penjual.penjualan');
    });
    Route::get('/ulasan', function () {
        return view('penjual.ulasan');
    });
    
    Route::resource('/produk', ProdukController::class);
});

Route::get('403', function() {
    return view('403');
});