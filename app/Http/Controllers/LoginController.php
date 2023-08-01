<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        $data['title'] = 'Login';
        return view('auth/login', $data);
    }

    public function login_action(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt(['username' => $req->username, 'password' => $req->password])) {
            $req->session()->regenerate();
            return redirect()->intended('/dashboard');
        } 

        return back()->withErrors([
            'password' => 'username atau password salah'
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/auth/login');
    }
}
