<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChasoulUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Admin',
                'email'=> 'admin@gmail.com',
                'password'=> bcrypt('131122'),
                'role'=>'admin'
            ],
            [
                'name'=>'Dosen',
                'email'=> 'dosen@gmail.com',
                'password'=> bcrypt('131122'),
                'role'=>'dosen'
            ],
            [
                'name'=>'Mahasiswa',
                'email'=> 'mahasiswa@gmail.com',
                'password'=> bcrypt('131122'),
                'role'=>'mahasiswa'
            ],
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
