<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder lainnya
        $this->callSeeders();

        // Seed pengguna
        $this->seedUsers();
    }

    /**
     * Method untuk seed data pengguna.
     */
    private function seedUsers(): void
    {
        if (!User::where('email', 'admin@admin.com')->exists()) {
            // Membuat pengguna dengan factory
            $users = User::factory()->createMany([
                [
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('password'),
                ],
            ]);

            // Berikan role super_admin untuk admin
            foreach ($users as $user) {
                if ($user->email == 'admin@admin.com') {
                    $user->assignRole('super_admin');
                }
            }
        }
    }

    /**
     * Method untuk memanggil seeder tambahan.
     */
    public function callSeeders(): void
    {
        $this->call([
            MenuSeeder::class
        ]);
    }
}
