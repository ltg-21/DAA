<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'pembeli' => 'sidney',
                'menu' => 'Burger',
                'harga' => '20000'
            ]
        ];
        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
