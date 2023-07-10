<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Keranjang::where('user_id', Auth::user()->id)->get();
        return view('keranjang', ['data' => $data]);
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
        $data = Keranjang::create([
            'id' => Str::uuid(),
            'user_id' => $request->user_id,
            'produk_id' => $request->produk_id,
            'penjual_id' => $request->penjual_id,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga * $request->jumlah,
            'ukuran' => ($request->size) ? $request->size : '',
            'varian' => ($request->varian) ? $request->varian : '',
        ]);

        if($data) {
            return redirect('keranjang');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        Keranjang::where('id', $id)->delete();
        return redirect('/keranjang');
    }
}