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
        Schema::create('tims', function (Blueprint $table) {
            $table->id();
            $table->string('image_path')->nullable(); // Path gambar profil anggota tim
            $table->string('name'); // Nama anggota tim
            $table->string('position'); // Jabatan anggota tim
            $table->text('description')->nullable(); // Deskripsi singkat/bio anggota tim
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tims');
    }
};
