<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed|min:8',
            'nik' => 'required|unique:users,nik',
            'no_hp' => 'required',
            'alamat' => 'required',
            'role' => 'required|in:admin,user',
            'foto_profil' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        DB::beginTransaction();

        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->nik = $request->nik;
            $user->no_hp = $request->no_hp;
            $user->alamat = $request->alamat;
            $user->role = $request->role;

            $hashName = $request->foto_profil->hashName();
            $request->foto_profil->storeAs('public/foto_profil', $hashName);
            $user->foto_profil = $hashName;

            $user->save();

            DB::commit();

            notify()->success('User created successfully.');
            return redirect()->route('users.index');
        } catch (Exception $e) {
            DB::rollBack();
            notify()->error('User failed to create.');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users,email,' . $id,
            'username' => 'required|unique:users,username,' . $id,
            'nik' => 'required|unique:users,nik,' . $id,
            'no_hp' => 'required',
            'alamat' => 'required',
            'role' => 'required|in:admin,user',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'password' => 'nullable|confirmed|min:8',
        ]);

        DB::beginTransaction();

        try {
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->nik = $request->nik;
            $user->no_hp = $request->no_hp;
            $user->alamat = $request->alamat;
            $user->role = $request->role;

            if ($request->password) {
                $user->password = Hash::make($request->password);
            }

            if ($request->foto_profil) {
                if (Storage::exists('public/foto_profil/'.$user->foto_profil)) {
                    Storage::delete('public/foto_profil/'.$user->foto_profil);
                }
                $hashName = $request->foto_profil->hashName();
                $request->foto_profil->storeAs('public/foto_profil', $hashName);
                $user->foto_profil = $hashName;
            }

            $user->save();

            DB::commit();

            notify()->success('User updated successfully.');
            return redirect()->route('users.index');
        } catch (Exception $e) {
            DB::rollBack();
            notify()->error('User failed to update.');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if (Storage::exists('public/foto_profil/'.$user->foto_profil)) {
            Storage::delete('public/foto_profil/'.$user->foto_profil);
        }
        $user->delete();

        notify()->success('User deleted successfully.');
        return redirect()->route('users.index');
    }
}
