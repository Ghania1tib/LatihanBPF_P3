<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login-form');
    }

    public function login(Request $request)
    {
        $nim_anda = 'G2455301074';
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|min:3|regex:/[A-Z]/',
        ], [
            'password.min' => 'Password minimal 3 karakter.',
            'password.regex' => 'Password harus mengandung minimal satu huruf kapital.'
        ]);

        $username = $request->username;
        $password = $request->password;

        if ($username === $nim_anda && $password === $nim_anda) {
            return redirect()->route('auth.index')->with('success', 'Login Berhasil! Selamat datang ' . $username);

        } else {
            return redirect()->route('auth.index')->with('error', 'Login Gagal. Username atau Password tidak sesuai dengan NIM Anda.');
        }
    }
}

