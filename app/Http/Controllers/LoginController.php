<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nama' => 'required',
            'NIK' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }


        else {
            return back()->with('loginError', 'login gagal!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
