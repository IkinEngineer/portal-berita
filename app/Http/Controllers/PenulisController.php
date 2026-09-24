<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisController extends Controller
{
    public function index()
    {
        if (session()->has('key')) {
            return redirect()->route('berita.index');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email tidak valid.',
            'password.required' => 'Password wajib diisi.',
        ]);

        $key = Penulis::where('email', $request->email)
            ->where('password', $request->password)
            ->get();

        if (!$key->isEmpty()) {
            session()->put('key', $key);
            return redirect()->route('berita.index');
        }
        return redirect('/login')->with('error', 'Email atau password salah.');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
