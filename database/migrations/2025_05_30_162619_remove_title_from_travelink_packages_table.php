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
            $table->dropColumn('title'); // Menghapus kolom title
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('travelink_packages', function (Blueprint $table) {
            $table->string('title')->nullable(); // Menambahkan kembali kolom title jika migrasi di-rollback
        });
    }
};
