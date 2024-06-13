<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repository\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Inertia\Inertia;

class UserController extends Controller
{
    protected $userRepo;

    public function register()
    {
        return view('register');
    }

    public function profile()
    {
        return view('profile');
    }

    public function updateProfile()
    {
        return view('update-profile');
    }
}
