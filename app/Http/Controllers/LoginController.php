<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function loginform()
    {
        return view('backend.v_login.login', [
            'judul' => 'Login',
        ]);
    }
    public function daftarform()
    {
        return view('backend.v_daftar.daftar', [
            'judul' => 'Create new  account'
        ]);
    }

    public function simpanBeranda(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->status == 0) {
                Auth::logout();
                return back()->with('error', 'Akun anda Belum terdaftar');
            }
            $request->session()->regenerate();
            if (Auth::user()->role === '1'){
                return redirect()->intended(route('backend.admin'));
            } else {
                return redirect()->intended(route('backend.beranda'));

            }
        }
        return back()->withErrors([
            'email' => 'Email atau Password salah.'
        ])->withInput();
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|string|min:6',
            'hp' => 'required||min:10|max:13'
        ]);
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'hp' => $request->hp,
            'status' => 1,
        ]);
        return redirect()->route('backend.login')->with('success', 'akun berhasil dibuat, silakan login');
    }
}
