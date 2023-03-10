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
            $image = $request->file('foto_profil');
            $image->storeAs('public/foto_profil', $image->hashName());
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'nik' => $request->nik,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'foto_profil' => $image->hashName(),
            ]);
        }else{
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'nik' => $request->nik,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'foto_profil' => $image->hashName(),
            ]);
        }

        return view('profil')->with('message','Your Profil had been updated');
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

    public function destroyUser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('destroy.users')->with('success','Data deleted successfully!');
        return Response($output);
    }
}
