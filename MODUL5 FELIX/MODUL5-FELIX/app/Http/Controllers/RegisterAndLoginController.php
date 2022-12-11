<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterAndLoginController extends Controller
{
    public function index() {
        return view('register-login.index');
    }

    public function authenticate(Request $request) {
        $whoami = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($whoami, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('yellow-toast', 'Login Berhasil');
        }
        return back()->with('red-toast', 'Gagal Login');
    }

    public function logout(Request $request) {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->withoutCookie('nav_color');
    }

    public function register() {
        return view('register-login.register');
    }

    public function store(Request $request) {
        $request->validate([
            'email' => 'unique:users',
            'konfirmasi_password' => 'same:password'
        ]);
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/login')->with('blue-toast', 'Register Berhasil');
    }
}
