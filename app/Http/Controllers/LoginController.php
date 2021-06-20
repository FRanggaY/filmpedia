<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function postlogin (request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('index')->with('success', 'Anda berhasil Masuk');
        }
        return redirect('login')->with('failed', 'Email atau Password Salah');
    }
    public function logout () {
        Auth::logout();
        return redirect('/');
    }
}
