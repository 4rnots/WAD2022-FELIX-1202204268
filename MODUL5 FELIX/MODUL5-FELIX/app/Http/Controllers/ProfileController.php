<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index() {
        $colors = [
            '#3563E9' => 'Blue',
            '#ffc107' => 'Yellow',
            '#212529' => 'Black',
            '#198754' => 'Green'
        ];
        $get_nav_color = Cookie::get('nav_color');
        $set_nav_color = Cookie::get('nav_color') ?? '#3563E9';
        return view('profile', compact('colors', 'get_nav_color', 'set_nav_color'));
    }

    public function update(Request $request, User $user) {
        if($request->password !== null || $request->konfirmasi_password !== null) {
            $request->validate([
                'konfirmasi_password' => 'same:password'
            ]);
            $password = Hash::make($request->password);
            User::where('id', $user->id)->update([
                'name' => $request->name,
                'no_hp' => $request->no_hp,
                'password' => $password
            ]);
        } else {
            User::where('id', $user->id)->update([
                'name' => $request->name,
                'no_hp' => $request->no_hp
            ]);
        }
        Cookie::queue('nav_color', $request->nav_color);
        return redirect('/profile')->with('yellow-toast', 'Data berhasil diupdate');
    }
}
