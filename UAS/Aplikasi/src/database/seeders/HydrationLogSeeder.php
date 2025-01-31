<?php

namespace Database\Seeders;

use App\Models\HydrationLog;
use Illuminate\Database\Seeder;

class HydrationLogSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan log hidrasi untuk pengguna dengan id = 1
        HydrationLog::create([
            'user_id' => 1,   // Pastikan user_id valid
            'amount' => 500,   // Jumlah air yang diminum
            'date' => '2025-01-31',   // Tanggal log
        ]);
    }
}
