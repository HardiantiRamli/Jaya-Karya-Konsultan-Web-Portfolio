<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function proses(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data['email'] = $request->email;
        $data['password'] = $request->password;

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('gagal', 'Email / Password yang anda masukkan salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
