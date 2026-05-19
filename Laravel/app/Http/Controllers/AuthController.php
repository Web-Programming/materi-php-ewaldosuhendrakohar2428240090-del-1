<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ================= REGISTER ================= //
    public function registerForm()
    {
        return view('auth.register', ['title' => 'Daftar Akun']);
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed', // Harus ada field password_confirmation di form
        ]);

        // Simpan user baru ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password menggunakan bcrypt
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    // ================= LOGIN ================= //
    public function loginForm()
    {
        return view('auth.login', ['title' => 'Login']);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        // Coba login & cek fitur "Remember Me"
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            // Regenerasi session untuk mencegah Session Fixation Attack
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        // Jika gagal, kembalikan ke form beserta error
        return back()->withInput($request->only('email'))->withErrors(['email' => 'Email atau password salah.']);
    }

    // ================= LOGOUT ================= //
    public function logout(Request $request)
    {
        Auth::logout(); // Hapus sesi login
        $request->session()->invalidate(); // Invalidasi token session
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}