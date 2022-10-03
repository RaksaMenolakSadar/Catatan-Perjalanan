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

    function authenticate(Request $request)
    {
        $request->validate([
            'nama' => ['required'],
            'NIK' => ['required']
        ]);

        $credentials = $request->only('nama','NIK');
        
        if (Auth::attempt($credentials)) 
        {
            $request->session()->regenerate();
            return redirect('/');
        }

        else
        {
            return back()->with('loginError', 'Login gagal!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login.index');
    }
}
