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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable(); // Teks deskripsi di bawah logo (misal: "Joglo Media Web Development adalah mitra terbaik...")
            $table->string('address')->nullable(); // Alamat (misal: "Jl. Raya Jogja-Solo, Yogyakarta")
            $table->string('phone')->nullable(); // Nomor telepon (misal: "+62 812-3456-7890")
            $table->string('email')->nullable(); // Email (misal: "joglomediaweb.dev@gmail.com")
            $table->json('quick_links')->nullable(); // Link cepat dalam format JSON (misal: [{"text": "Beranda", "url": "/"}, {"text": "Paket", "url": "/paket"}])
            $table->json('service_links')->nullable(); // Link layanan dalam format JSON
            $table->json('social_media_links')->nullable(); // Link media sosial dalam format JSON (misal: [{"platform": "facebook", "url": "https://facebook.com/yourpage"}])
            $table->string('copyright_text')->nullable(); // Teks copyright (misal: "© 2023 Joglo Media Web Development. All rights reserved.")
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
