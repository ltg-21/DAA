<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hydration_logs', function (Blueprint $table) {
            $table->id(); // Kolom id sebagai primary key
            $table->foreignId('user_id') // Kolom user_id yang mengacu pada tabel users
                  ->constrained('users') // Menghubungkan ke tabel users
                  ->onDelete('cascade'); // Menghapus log jika user dihapus
            $table->integer('amount'); // Jumlah hidrasi
            $table->date('date'); // Tanggal log hidrasi
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hydration_logs');
    }
};
