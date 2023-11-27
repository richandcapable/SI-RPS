<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ], [
            'email.required'    => 'Email harus diisi',
            'password.required' => 'Password harus diisi'
        ]);

        $infologin = [
            'email'    => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin))
        {
            return redirect('dashboard');
        }else{
            return redirect('login')->withErrors('Email dan password yang anda masukkan tidak sesuai!')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
