<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
            "title" => "Register Siswa"
        ]);
    }

    public function TeacherRegister()
    {
        return view('guru-page.register-guru',[
            "title" => "Register Guru"
        ]);
    }

    public function CreateUser(UserRegisterRequest $request)
    {
        $dataValidate = $request->validated();
        $user = User::where('nis', $dataValidate['nis'])->count();
        if($user >= 1)
        {
            return redirect("/register")->with('failed','nis has already registered');
        }
        $dataValidate['password'] = bcrypt($dataValidate['password']);
        $result = User::create($dataValidate);

        return redirect("/register")->with('sucess','Sucess Registered');

    }
}
