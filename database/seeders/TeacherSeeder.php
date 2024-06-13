<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Feri Hermawan',
            'username' => 'feri123',
            'gender' => 'Laki-laki',
            'role' => 'teacher',
            'password' => Hash::make('feri123'),
            'imgUri' => 'profile/profile-default.png'
        ]);
    }
}
