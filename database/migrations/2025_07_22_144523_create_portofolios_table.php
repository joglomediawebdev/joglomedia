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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable(); // Kategori portofolio (misal: 'Website', 'Aplikasi', 'Website Company Profile', 'Instansi/Sekolah', 'Custom')
            $table->string('image_path')->nullable(); // Path gambar thumbnail proyek
            $table->string('title'); // Judul proyek
            $table->text('description')->nullable(); // Deskripsi singkat proyek
            $table->string('link')->nullable(); // Link ke detail proyek atau demo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolios');
    }
};
