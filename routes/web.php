<?php

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
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
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
Route::get('/profile-user', function () {
    return view('profileUser');
});
Route::get('/pertanian-kategori', function () {
    return view('pertanianKategori');
});
Route::get('/keranjang', function () {
    return view('keranjang');
});
