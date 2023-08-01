<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class DataMasterController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('DataMaster.users', ['users' => $users]);
    }

    public function AddUser(Request $req)
    {
        $data = $req->all();

        $rules = [
            'username' => 'required|min:3|unique:users',
            'name' => 'required',
            'password' => 'required',
            'role' => 'required',
        ];

        $customMessages = [
            'username.required' => 'Username harus diisi.',
            'username.min' => 'Username minimal 3 karakter.',
            'username.unique' => 'Username sudah digunakan.',
            'name.required' => 'Nama harus diisi.',
            'role.required' => 'Role harus dipilih.',
        ];

        $validator = Validator::make($data, $rules, $customMessages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator, 'customErrors')->withInput();
        }

        User::create([
            'username' => $req->username,
            'name' => $req->name,
            'password' => Hash::make($req->password),
            'role' => $req->role,
        ]);

        return redirect()->back()->with(session()->flash('success', 'User ' . $req->username . ' Berhasil Ditambahkan'));
    }

    public function DeleteUser($id)
    {

        $user = User::find($id);

        $username = $user->username;

        if (!$user) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }

        $user->delete();

        return redirect()->back()->with(session()->flash('error', 'Data ' . $username . ' Berhasil Dihapus'));
    }

    public function UpdateUser(Request $req, $id)
    {
        $data = $req->all();
        $user = User::find($id);
        $password = $user->password;
        $rules = [
            'username' => [
                'required',
                'min:3',
                Rule::unique('users')->ignore($user->id),
            ],
            'name' => 'required',
            'password' => '',
            'role' => 'required',
        ];

        $customMessages = [
            'username.required' => 'Username harus diisi.',
            'username.min' => 'Username minimal 3 karakter.',
            'username.unique' => 'Username sudah digunakan.',
            'name.required' => 'Nama harus diisi.',
            'role.required' => 'Role harus dipilih.',
        ];

        $validator = Validator::make($data, $rules, $customMessages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with(['updateError' => $id]);
        }

        if (!empty($req->password)) {
            $password = Hash::make($req->password);
        }

        if ($user->role == '0' && $req->role != '0') {
            return redirect()->back()->with(session()->flash('error', 'Anda Tidak Bisa Mengubah Role Superadmin'));
        }

        User::find($id)->update([
            'username' => $req->username,
            'name' => $req->name,
            'password' => $password,
            'role' => $req->role,
        ]);

        return redirect()->back()->with(session()->flash('success', 'Update Data User Berhasil'));
    }
}
