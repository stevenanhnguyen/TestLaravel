<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginViewController extends Controller
{
    public function index()
    {
        return view('login');
    }
}
