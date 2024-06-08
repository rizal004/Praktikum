<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    // Fungsi Login
    public function login(Request $request)
    {
    $credentials = $request->only('username','password');
    if(Auth::attempt($credentials))
    {
        $request->session()->regenerate();
        return redirect()->route('home');
    }else {
        dd('User Tidak Ditemukan');
    }

    }


    // Fungsi Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('loginView');

    }

}
