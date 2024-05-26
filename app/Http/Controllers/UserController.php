<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userRepo;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    public function CreateAccount(Request $request)
    {
        return  "Helo world";
    }

    public function Profile()
    {
        return view('profile', [
            "title" => "Profile"
        ]);
    }
    public function ProfileGuru()
    {
        $teacher = Auth::user();
        return view("guru-page.profile",[
            "title" => "Profile",
            "headerTitle" => "Profile Guru",
            'teacher' => $teacher
        ]);
    }
}
