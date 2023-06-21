<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index() {
        return view('Login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->role == 'admin') {
                return redirect('/super-admin');
            }else if(Auth::user()->role == 'penjual') {
                return redirect('/penjual');
            }else {
                return redirect('/');
            }
        }
 
        return redirect()->route('login');
    }

    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}