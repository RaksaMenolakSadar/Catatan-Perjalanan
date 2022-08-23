<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required | max:100',
            'email' => 'required | email',
            'NIK' => 'required | max:5'
        ]);


        $validatedData['NIK'] = bcrypt($validatedData['NIK']);
        User::create($validatedData);

        return redirect('login')->with('success', 'Registrasi berhasil, silahkan login!');
    }
}
