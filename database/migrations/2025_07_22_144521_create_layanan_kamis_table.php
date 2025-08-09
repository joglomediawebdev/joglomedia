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
        Schema::create('layanan_kamis', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable(); // Nama ikon (misal: 'heroicon-o-device-mobile' atau path SVG)
            $table->string('title'); // Contoh: "Desain Responsif & Mobile Friendly"
            $table->text('description'); // Contoh: "Website kamu akan tampil maksimal di semua perangkat..."
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_kamis');
    }
};
