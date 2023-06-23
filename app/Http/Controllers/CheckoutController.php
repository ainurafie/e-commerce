<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Produk;
use App\Models\Keranjang;
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
        Validator::make($request->all(), [
            'produk_id' => 'required',
            'penjual_id' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'ukuran' => 'required',
            'varian' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_pembayaran' => 'required|file|size:2048'
        ]);
        if($request->file('bukti_pembayaran')) {
            $path = 'Bukti_pembayaran'; 
            $file = $request->file('bukti_pembayaran');
            Storage::putFileAs($path, $file, $file->getClientOriginalName());
        }
        $penjual_id = Produk::where('id', $request->produk_id)->first();
        Checkout::create([
            'user_id' => Auth::user()->id,
            'produk_id' => $request->produk_id,
            'penjual_id' => $penjual_id->user_id,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'ukuran' => $request->ukuran,   
            'varian' => $request->varian,
            'no' => '09123456789',
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_pembayaran' => ($request->file('bukti_pembayaran')) ? $path . '/' . $file->getClientOriginalName() : '',
            'alamat' => 'Tegal',
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
    public function show($id)
    {
        $data = Keranjang::where('id', $id)->first();
        $produk = Produk::where('id', $data->produk_id)->first();
        return view('beli-produk', [
            'data' => $data,
            'produk' => $produk
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
        //
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