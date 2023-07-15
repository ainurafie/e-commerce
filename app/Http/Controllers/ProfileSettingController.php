<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('id', Auth::user()->id)->first();
        return view('settings', ['data' => $data]);
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
        // dd($request->all());
        Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required',
            'ttl' => 'required',
            'gender' => 'required',
            'noHp' => 'required',
            'alamat' => 'required',
            'images' => 'required|file|size:2048'
        ]);
        $path = 'User'; 
        $file = $request->file('images');
        Storage::putFileAs($path, $file, $file->getClientOriginalName());
        
        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'toko' => ($request->toko) ? $request->toko : '',
            'ttl' => $request->ttl,
            'kelamin' => $request->gender,
            'noHp' => $request->noHp,
            'alamat' => $request->alamat,
            'norek' => ($request->rekening) ? $request->rekening : '',
            'image' => $path . "/" . $file->getClientOriginalName(),
        ];

        $update = User::where('id', Auth::user()->id)->first();
        $update->update($data);
        if(Auth::user()->role == "pembeli") {
            return redirect('/');
        }elseif(Auth::user()->role == "penjual") {
            return redirect('/penjual');
        }elseif(Auth::user()->role == "admin") {
            return redirect('/super-admin');
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