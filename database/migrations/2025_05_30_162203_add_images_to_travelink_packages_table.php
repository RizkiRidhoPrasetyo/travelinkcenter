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
        Schema::table('travelink_packages', function (Blueprint $table) {
            $table->json('images')->nullable(); // Kolom untuk menyimpan gambar dalam format JSON
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('travelink_packages', function (Blueprint $table) {
            $table->dropColumn('images'); // Menghapus kolom images jika migrasi di-rollback
        });
    }
};
