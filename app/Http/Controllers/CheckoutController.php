<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produk;
use App\Models\Checkout;
use App\Models\Keranjang;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('beli-produk')
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->alamat == NULL) {
            return redirect('profile-setting')->with('status', 'Silakan Lengkapi Profile terlebih dahulu !');
        }
        Validator::make($request->all(), [
            'produk_id' => 'required',
            'penjual_id' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'required|file|size:2048'
        ]);
        if($request->file('bukti_pembayaran')) {
            $path = 'Bukti_pembayaran'; 
            $file = $request->file('bukti_pembayaran');
            Storage::putFileAs($path, $file, $file->getClientOriginalName());
        }
        $produk = Produk::where('id', $request->produk_id)->first();
        Checkout::create([
            'user_id' => Auth::user()->id,
            'produk_id' => $request->produk_id,
            'penjual_id' => $produk->user_id,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'ukuran' => ($request->ukuran) ? $request->ukuran : '',   
            'varian' => ($request->varian) ? $request->varian : '',
            'no' => Auth::user()->noHp,
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_pembayaran' => ($request->file('bukti_pembayaran')) ? $path . '/' . $file->getClientOriginalName() : '',
            'alamat' => Auth::user()->alamat,
        ]);
        $produk->update([
            'stok'=>$produk->stok - $request->jumlah,
            'terjual'=>$produk->terjual + $request->jumlah,
        ]);

        $Checkout_id = Checkout::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        // return $Checkout_id;
        Notifikasi::create([
            'user_id' => Auth::user()->id, 
            'checkout_id' => $Checkout_id->id,
            'pesan' => 'Pesanan Anda Sedang Dikemas',
        ]);
        Notifikasi::create([
            'user_id' => $Checkout_id->penjual_id,
            'checkout_id' => $Checkout_id->id,
            'pesan' => 'Ada Pesanan Masuk !',
        ]);

        if($request->keranjang) {
            Keranjang::where('id', $request->keranjang)->delete();
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $produk = Produk::where('id', $id)->first();
        return view('beli-produk', [
            'produk' => $produk,
            'jumlah' => $request->jumlah,
            'action' => 'beli',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Keranjang::where('id', $id)->first();
        $produk = Produk::where('id', $data->produk_id)->first();
        return view('beli-produk', [
            'data' => $data,
            'produk' => $produk,
            'action' => 'keranjang'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}