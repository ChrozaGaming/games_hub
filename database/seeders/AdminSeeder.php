<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users_admin')->insert([
            'name' => 'Admin Games Hub',
            'email' => 'gameshubcorp@gmail.com', // Ganti email di sini
            'password' => Hash::make('123'), // Password dienkripsi
            'credits' => 0, // Default credits
        ]);
    }
}
