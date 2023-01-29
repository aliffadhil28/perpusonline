<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth;
use DB;

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
        $user = Auth()->user();
        $foto_profil = optional($user)->foto_profil ?? 'public/img/default_profil/profil.png';
        return view('profil',compact('user','foto_profil'));
    }

    public function editProfil()
    {
        return view('edit_profil');
    }

    public function update(User $user,Request $request)
    {
        $user = auth()->user();
        if($request->hasFile('foto_profil')){
            $foto_profil = $request->file('foto_profil');
            $nama_foto = time().'.'.$foto_profil->getClientOriginalExtension();
            $path = 'public/foto_profil/';
            $foto_profil->move($path, $nama_foto);
            $user->foto_profil = $nama_foto;
            $user->save();
        }
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return view('profil')->with('message','Your Profil had been updated');
    }

    public function showUsers()
    {
        $users = User::all();
        return view('admin_anggota', compact('users'));

    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $orang = "";
            $user = DB::table('users')->where('name','LIKE','%'.request()->search.'%')->get();
            if ($user) {
                foreach ($users as $user => $orang) {
                    $output.='<tr>'.
                    '<td>'.$product->id.'</td>'.
                    '<td>'.$product->title.'</td>'.
                    '<td>'.$product->description.'</td>'.
                    '<td>'.$product->price.'</td>'.
                    '</tr>';
                }
                return Response($output);
            }
        }
    }
}
