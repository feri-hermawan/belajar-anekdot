<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{

    public function index()
    {
        return view('login',[
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $dataValidate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username',$dataValidate['username'])->get();
        if($user->count() <= 0)
        {
            alert()->error('Failed','Username atau password salah');
            return redirect('/login');
        }

        if(Auth::attempt($dataValidate)){
            $request->session()->regenerate();
            return redirect('profile');
        }

        alert()->error('Failed','Username atau password salah');
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
