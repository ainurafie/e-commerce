<?php

namespace App\Http\Controllers\Penjual;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Psy\VersionUpdater\Checker;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PesananPenjualContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Checkout::where('penjual_id', Auth::user()->id)->where(function($query) {
            $query->where('status_pengiriman', NULL);
        })->get();
        $cod = Checkout::where('penjual_id', Auth::user()->id)->where(function($query) {
            $query->where('status_pengiriman', NULL);
            $query->where('metode_pembayaran', "COD");
        })->count();
        $bca = Checkout::where('penjual_id', Auth::user()->id)->where(function($query) {
            $query->where('status_pengiriman', NULL);
            $query->where('metode_pembayaran', "BCA");
        })->count();
        return view('penjual.pesanan', [
            'data'=>$data,
            'cod' => $cod,
            'bca' => $bca
        ]);
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Checkout::where('id', $id)->first();
        return view('penjual.pesanan-penjual', ['data'=>$data]);
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
        $path = 'Bukti_Pengiriman'; 
        $file = $request->file('bukti_pengiriman');
        Storage::putFileAs($path, $file, $file->getClientOriginalName());

        $data = [
            'status_pengiriman' => $request->status_pengiriman,
            'bukti_pengiriman' => $path . '/' . $file->getClientOriginalName()
        ];

        $update = Checkout::where('id', $id)->update($data);
        if($update) {
            return 'berhasil';
        }
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