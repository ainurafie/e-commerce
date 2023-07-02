<?php

namespace App\Http\Controllers\Penjual;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ulasan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role != "penjual") {
            return view("403");
        }
        return view('penjual.produk');
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
        if(Auth::user()->role != "penjual") {
            return view("403");
        }
        Validator::make($request->all(), [
            'name' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
            'size' => 'required',
            'group_a' => 'required',
            'images' => 'required|file|size:2048'
        ]);
        $path = 'Produk'; 
        $file = $request->file('images');
        Storage::putFileAs($path, $file, $file->getClientOriginalName());
        
        Produk::create([
            'user_id' => Auth::user()->id,
            'nama' => $request->name,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'jenis' => $request->jenis,
            'gambar' => $path . '/' . $file->getClientOriginalName(),
            'ukuran' => json_encode($request->size),
            'varian' => json_encode($request->group_a),
        ]);

        return redirect('/penjual/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if(Auth::user()->role != "penjual") {
        //     return view("403");
        // }
        $data = Produk::where('id', $id)->first();
        $ulasan = Ulasan::where('produk_id', $id)->get();
        return view('detailProduct', [
            'data'=>$data,
            'ulasan' => $ulasan,
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
        $produk = Produk::where('id', $id)->delete();
        if($produk) {
            return redirect('/penjual/produk');
        }
    }
}