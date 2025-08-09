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
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Contoh: "Paket Company Profile"
            $table->string('price'); // Contoh: "Rp 1.000.000"
            $table->string('duration')->nullable(); // Contoh: "/Tahun", "Termasuk Hosting 1 Tahun"
            $table->text('description')->nullable(); // Contoh: "Cocok Untuk UMKM dan bisnis kecil"
            $table->json('features')->nullable(); // Daftar fitur dalam format JSON, contoh: ["Desain profesional & responsif", "1-5 menu"]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakets');
    }
};
