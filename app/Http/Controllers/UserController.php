<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function showProfil()
    {
        $user = Auth::user();
        $foto_profil = optional($user)->foto_profil ?? 'public/img/default_profil/profil.png';
        return view('profil',compact('user','foto_profil'));
    }

    public function updateProfil(Request $request)
    {
        $request->validate([
            'foto_profil' => 'mimes:jpg,jpeg,png,svg',
        ]);

        $id_user = Auth::user()->id;
        $user = User::find($id_user);

        if ($request->hasFile('foto_profil')) {
            $foto = $request->file('foto_profil');
            $ubahNama = time().$foto->getClientOriginalName();
            $foto->move('foto_profil',$ubahNama);
            $user->foto_profil = $ubahNama;
            $user->save();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->nik = $request->nik;
        $user->alamat = $request->alamat;
        $user->no_hp = $request->no_hp;
        $user->save();

        return view('profil');
    }
}
