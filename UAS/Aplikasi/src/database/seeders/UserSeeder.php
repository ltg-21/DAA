<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat pengguna dengan id = 1
        User::create([
            'name' => 'Lintang',
            'email' => 'lintang@example.com',
            'password' => bcrypt('password123'), // Enkripsi password
            'avatar_url' => null,
        ]);
    }
}
