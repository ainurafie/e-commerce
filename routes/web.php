<?php

use App\Models\Keranjang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Sidebar\Penjual;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\Penjual\penjualanController;
use App\Http\Controllers\Penjual\PesananPenjualContoller;
use App\Http\Controllers\Penjual\ProdukController;
use App\Models\Checkout;

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

Route::get('/detail-product/{id}', [ProdukController::class, 'show']);

Route::get('/detail-toko', function () {
    return view('detailToko');
});
Route::resource('/beli-produk', CheckoutController::class);
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

Route::resource('/keranjang', KeranjangController::class);

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
        $data = Checkout::where('penjual_id', Auth::user()->id)->where(function($query) {
            $query->where('status_pengiriman', NULL);
        })->get();
        $cod = Checkout::where('penjual_id', Auth::user()->id)->where(function($query) {
            $query->where('status_pengiriman', 'Terkirim');
            $query->where('metode_pembayaran', "COD");
        })->count();
        $bca = Checkout::where('penjual_id', Auth::user()->id)->where(function($query) {
            $query->where('status_pengiriman', 'Terkirim');
            $query->where('metode_pembayaran', "BCA");
        })->count();
        return view('penjual.index', [
            'data'=> $data,
            'bca'=> $bca,
            'cod'=> $cod
        ]);
    });
    Route::get('/keranjang', function () {
        $data = Keranjang::where('penjual_id', Auth::user()->id)->get();
        return view('penjual.keranjang', ['data'=>$data]);
    });
    Route::resource('/pesanan', PesananPenjualContoller::class);
    
    Route::resource('penjualan', penjualanController::class);
    Route::get('/ulasan', function () {
        return view('penjual.ulasan');
    });
    
    Route::resource('/produk', ProdukController::class);
});

Route::get('403', function() {
    return view('403');
});