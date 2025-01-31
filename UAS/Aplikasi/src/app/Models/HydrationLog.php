<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HydrationLog extends Model
{
    use HasFactory;

    protected $table = 'hydration_logs'; // Nama tabel

    protected $fillable = [
        'user_id',
        'amount',
        'date',
    ];

    /**
     * Relasi ke model User (Setiap log milik satu user)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}