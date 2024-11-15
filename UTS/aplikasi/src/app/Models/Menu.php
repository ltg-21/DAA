<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Jika Anda memiliki atribut yang bisa diisi secara massal
    protected $fillable = ['pembeli', 'menu', 'harga'];
}
