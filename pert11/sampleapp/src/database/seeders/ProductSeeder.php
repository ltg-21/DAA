<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Isi Data Tabel Produk
        DB::table('products')->insert([
            ['name' => 'ADIDAS', 'price' => 1000, 'category' => 'SEPATU'],
            ['name' => 'NIKE', 'price' => 999, 'category' => 'SEPATU'],
            ['name' => 'LEVIS', 'price' => 500, 'category' => 'CELANA'],
            ['name' => 'UNIQLO', 'price' => 100, 'category' => 'BAJU'],
        ]);
    }
}
