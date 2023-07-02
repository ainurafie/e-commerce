<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class dataPenjual extends Controller
{
    public function index() {
        $data = User::where('role', 'penjual')->get();
        return view('superAdmin.dataPenjual', ['data' => $data]);
    }
    public function show($id) {
        $data = User::where('id', $id)->first();
        return view('superAdmin.dataPenjualDetail', ['data' => $data]);
    }
}