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
        Schema::table('users', function (Blueprint $table) {
            // Add phone_number column after email
            $table->string('phone_number')->nullable()->after('email');
            // Add role column with a default value of 'customer'
            $table->string('role')->default('customer')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the columns if the migration is rolled back
            $table->dropColumn('phone_number');
            $table->dropColumn('role');
        });
    }
};
