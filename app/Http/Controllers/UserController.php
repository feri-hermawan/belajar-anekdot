<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
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
        return view('register',[
            'title' => 'Registrasi'
        ]);
    }

    public function CreateUser(Request $request)
    {

        $dataValidate = $request->validate([
           'name' => 'required',
           'username' => 'required|max:20',
            'gender' => 'required|string',
            'role' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('username',$dataValidate['username'])->get();
        if($user->count() > 0){
            return redirect('/register')->with('failed','Username sudah digunakan');
        }
        $dataValidate['password'] = Hash::make($dataValidate['password']);
        $newUser = User::create($dataValidate);

        if($request->kode_kelas){
            $kelas = Kelas::where('kode_kelas', $request->kode_kelas)->get();
            Siswa::create([
                'siswa_id' => $newUser->id,
                'kelas_id' => $kelas->id
            ]);
        }

        return redirect('/login')->with('success','Akun berhasil di buat');
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
