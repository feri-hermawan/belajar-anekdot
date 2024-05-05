<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function Login()
    {
        return view("login", [
            "title" => "Login"
        ]);
    }
    public function Registrasi()
    {
        return view("register", [
            "title" => "Register"
        ]);
    }
}
