<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Memanggil UserSeeder terlebih dahulu
        $this->call(UserSeeder::class);

        // Setelah itu baru memanggil HydrationLogSeeder
        $this->call(HydrationLogSeeder::class);
    }
}
