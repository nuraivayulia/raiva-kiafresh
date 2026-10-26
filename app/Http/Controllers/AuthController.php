<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ]);

        // Logika sederhana: login berhasil jika username dan password sama
        if ($request->username === $request->password) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('auth')
            ->with('error', 'Username atau password salah!')
            ->withInput($request->only('username')); // isi ulang username, password tidak
    }
}
