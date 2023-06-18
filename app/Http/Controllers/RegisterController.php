<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email',
            'email' => 'required|min:8',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register');
        }

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('login');
    }
}