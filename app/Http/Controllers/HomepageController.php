<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageCOntroller extends Controller
{
    public function index()
    {
        return view('homepage');
    }
}
