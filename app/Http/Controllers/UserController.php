<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use App\Repository\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;
use Inertia\Inertia;
use RealRashid\SweetAlert\Facades\Alert;

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
            alert()->error('Failed','Username sudah digunakan orang lain');
            return redirect('/register');
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

        alert()->success('Success','Akun berhasil dibuat');
        return redirect('/login');
    }
    public function profile()
    {
        $currentUser = Auth::user();
        $user = [
            'name' => $currentUser->name,
            'username' => $currentUser->username,
            'gender' => $currentUser->gender == 'laki_laki' ? 'Laki-laki' : 'Perempuan',
            'role' => $currentUser->role,
            'bio' => $currentUser->bio,
            'imgUri' => $currentUser->imgUri
        ];
        return view('profile',[
            'title' => 'Profile',
            'user' => $user
        ]);
    }

    public function updateProfile()
    {
        $currentUser = Auth::user();
        $user = [
            'name' => $currentUser->name,
            'username' => $currentUser->username,
            'gender' => $currentUser->gender,
            'bio' => $currentUser->bio,
        ];
        return view('update-profile',[
            'title' => 'Update Profile',
            'user' => $user
        ]);
    }

    public function updateUser(Request $request)
    {
        $dataValidate = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'gender' => 'required',
            'bio' => 'required',
            'imgUri' => 'nullable|mimes:jpg,png|file|max:1024',
            'password' => 'nullable|max:20'
        ]);

        foreach ($dataValidate as $key => $value){
            if($value == null){
                unset($dataValidate[$key]);
            }
            if($key == 'password' && $value != null)
            {
                $dataValidate[$key] = Hash::make($value);
            }
            if($key == 'imgUri' && $value != null)
            {
                $oldImage = Auth::user()->imgUri;
                Storage::delete($oldImage);

                $path = $request->file('imgUri')->store('profile');
                $dataValidate[$key] = $path;
            }
        }


        User::where('id',Auth::user()->id)->update($dataValidate);

        return redirect('/profile');
    }
}
