<?php

use App\Models\User;
use App\Models\Produk;
use App\Models\Ulasan;
use App\Models\Checkout;
use App\Models\Keranjang;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Sidebar\Penjual;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\dataPenjual;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\PesananAdminController;
use App\Http\Controllers\Penjual\ProdukController;
use App\Http\Controllers\ProfileSettingController;
use App\Http\Controllers\Penjual\penjualanController;
use App\Http\Controllers\Penjual\PesananPenjualContoller;
use App\Http\Livewire\Modal\Laporkan;
use App\Models\Laporan;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.store');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::middleware('auth')->group(function() {
    Route::get('kategori/{kategori}', function($cat) {
        return view($cat, [
            'data'=>$cat,
        ]);
    });
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('/ulasan', UlasanController::class);
    Route::get('/bantuan', function() {
        return view('bantuan');
    });
    Route::post('/laporkan', function(Request $request) {
        if($request->file('image')) {
            $path = 'Laporan'; 
            $file = $request->file('image');
            Storage::putFileAs($path, $file, $file->getClientOriginalName());
        }
        
        Laporan::create([
            'user_id' => Auth::user()->id,
            'produk_id' => $request->produk_id,
            'penjual_id' => $request->penjual_id,
            'jenis' => $request->category,
            'kronologi' => $request->kronologi,
            'image' => $path . "/" . $file->getClientOriginalName(),
        ]);

        return redirect("/");
    });
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/detail-product/{id}', [ProdukController::class, 'show']);
    
    Route::get('/detail-toko/{id}', function ($id) {
        $data = User::where('id', $id)->first();
        return view('detailToko', ['data'=>$data]);
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
    Route::resource('/profile-setting', ProfileSettingController::class);
    
    Route::get('/pertanian-kategori', function () {
        return view('pertanianKategori');
    });
    
    Route::resource('/keranjang', KeranjangController::class);
});

Route::prefix('/super-admin')->middleware('auth')->group(function() {
    Route::get('/', function () {
        $penjual = User::where('role', 'penjual')->count();
        $pembeli = User::where('role', 'pembeli')->count();
        $selesai = Checkout::where('status_pemesanan', 'Selesai')->count();
        $belumSelesai = Checkout::where('status_pemesanan', NULL)->count();
        $penipuan = Laporan::where('jenis', 'penipuan')->count();
        $tidaksesuai = Laporan::where('jenis', 'tidak sesuai')->count();
        if(Auth::user()->role == "admin") {
            return view('superadmin.index', [
                'penjual' => $penjual,
                'pembeli' => $pembeli,
                'selesai' => $selesai,
                'belumSelesai' => $belumSelesai,
                'penipuan' => $penipuan,
                'tidaksesuai' => $tidaksesuai,
            ]);
        }else {
            return view("403");
        }
        
    });
    Route::resource('/pesananAdmin', PesananAdminController::class);
    Route::get('/laporan', function () {
        if(Auth::user()->role == "admin") {
            $data = Laporan::all();
            return view('superadmin.laporan', ['data'=>$data]);
        }else {
            return view("403");
        }
    });

    Route::delete('/deleteUser/{id}', function($id) {
        $user = User::where('id', $id)->delete();
        $laporan = Laporan::where('penjual_id', $id)->delete();
        if($user) {
            return redirect('super-admin/laporan');
        }
    });

    Route::get('/data-penjual', [dataPenjual::class, 'index']);
    Route::get('/data-penjual/{id}', [dataPenjual::class, 'show'])->name('dataPenjual.show');
});


// Routing penjual 
Route::prefix('penjual')->middleware('auth')->group(function() {
    Route::get('/', function () {
        if(Auth::user()->role != "penjual") {
            return view("403");
        }
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
        $produk = Produk::where('user_id', Auth::user()->id)->orderBy('terjual', 'DESC')->paginate(5);
        $notifikasi = Notifikasi::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);
        return view('penjual.index', [
            'data'=> $data,
            'bca'=> $bca,
            'cod'=> $cod,
            'notifikasi' => $notifikasi,
            'produk' => $produk,
        ]);
    });
    Route::get('/keranjang', function () {
        if(Auth::user()->role != "penjual") {
            return view("403");
        }
        $data = Keranjang::where('penjual_id', Auth::user()->id)->get();
        return view('penjual.keranjang', ['data'=>$data]);
    });
    Route::resource('/pesanan', PesananPenjualContoller::class);
    
    Route::resource('penjualan', penjualanController::class);
    Route::get('/ulasan', [UlasanController::class, 'index']);
    
    Route::resource('/produk', ProdukController::class);
});

Route::get('403', function() {
    return view('403');
});