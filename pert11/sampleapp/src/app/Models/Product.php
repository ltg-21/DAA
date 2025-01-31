<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan (opsional jika sesuai konvensi Laravel)
    protected $table = 'products';

    // Kolom yang dapat diisi (fillable) melalui mass assignment
    protected $fillable = [
        'name',       // Nama produk
        'price',      // Harga produk
        'category',   // Kategori produk
    ];
}
