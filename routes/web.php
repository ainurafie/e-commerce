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
Route::get('/detail-product', function () {
    return view('detailProduct');
});
Route::get('/beli-produk', function () {
    return view('beli-produk');
});
Route::get('/detail-toko', function () {
    return view('detailToko');
});