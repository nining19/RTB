<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function showLogin(): View
    {
        return view('login'); 
    }

    public function login(Request $request): RedirectResponse
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username harus diisi.',
            'password.required' => 'Password harus diisi.',
        ]);


        $credentials = $request->only(['username', 'password']); 
        if (Auth::attempt($credentials)) {

            return redirect()->route('dashboard'); 
        } else {

            return back()->withErrors(['error' => 'Login gagal. Username atau password salah.']);
        }
    }

    public function showRegister(): View
    {
        return view('register'); 
    }

    public function register(Request $request): RedirectResponse
    {

        $request->validate([
            'email' => 'required|email|unique:pengguna',
            'username' => 'required|unique:pengguna', 
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'username.required' => 'Username harus diisi.',
            'username.unique' => 'Username sudah digunakan.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password harus minimal 6 karakter.',
        ]);

        Pengguna::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login'); 
    }
}
