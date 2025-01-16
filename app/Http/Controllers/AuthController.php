<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function showLogin(): View
    {
        return view('auth.login'); 
    }
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->only(['username', 'password']); 

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard'); 
        } else {
            return back()->withErrors(['error' => 'Login gagal. Periksa kembali username dan password Anda.']); 
        }
    }

    public function showRegister(): View
    {
        return view('auth.register'); 
    }


    public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
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
