<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PesananAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role != "admin") {
            return view(403);
        }
        $data = Checkout::where('status_pengiriman', "Terkirim")->orderBy('created_at', 'DESC')->get();
        return view('superadmin.pesanan', ['data'=>$data]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->role != "admin") {
            return view(403);
        }
        $data = Checkout::findOrFail($id);
        return view('superadmin.pesanan-selesai', ['data'=>$data]);
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
        if(Auth::user()->role != "admin") {
            return view(403);
        }

        if($request->file('bukti_pesanan_selesai')) {
            $path = 'Bukti_pesanan_selesai'; 
            $file = $request->file('bukti_pesanan_selesai');
            Storage::putFileAs($path, $file, $file->getClientOriginalName());
        }

        $checkout = Checkout::where('id', $id)->first();
        $checkout->update([
            'status_pemesanan' => $request->status_pemesanan,
            'bukti_pesanan_selesai' => $path . '/' . $file->getClientOriginalName(),
        ]);
        
        Notifikasi::create([
            'user_id' => $checkout->user_id, 
            'checkout_id' => $checkout->id,
            'pesan' => 'Pesanan Anda Selesai',
        ]);
        return redirect('super-admin/pesananAdmin');
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