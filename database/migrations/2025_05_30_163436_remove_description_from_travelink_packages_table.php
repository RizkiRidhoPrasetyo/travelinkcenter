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
            $table->dropColumn('description'); // Menghapus kolom description
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('travelink_packages', function (Blueprint $table) {
            $table->longText('description')->nullable(); // Menambahkan kembali kolom description jika migrasi di-rollback
        });
    }
};
