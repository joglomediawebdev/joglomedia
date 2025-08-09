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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Contoh: "Bingung Mulai Digitalisasi Bisnis?"
            $table->text('description'); // Contoh: "Joglo Media Web Development hadir untuk mendukung UMKM..."
            $table->string('button_text')->nullable(); // Contoh: "Pesan Sekarang"
            $table->string('image_path')->nullable(); // Path gambar ilustrasi di samping teks
            $table->string('image_logo')->nullable(); // Path gambar ilustrasi di samping teks
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
