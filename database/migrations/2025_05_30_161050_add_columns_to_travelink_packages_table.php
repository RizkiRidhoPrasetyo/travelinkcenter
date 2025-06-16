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
            $table->string('name'); // Nama tempat wisata
            $table->string('region'); // Daerah
            $table->decimal('price', 10, 2); // Harga tempat wisata
            $table->decimal('promo_price', 10, 2)->nullable(); // Harga promo
            $table->string('hashtag')->nullable(); // Hashtag kategori wisata
            $table->integer('max_quota'); // Jumlah kuota maksimal orang
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('travelink_packages', function (Blueprint $table) {
            $table->dropColumn(['name', 'region', 'price', 'promo_price', 'hashtag', 'max_quota']);
        });
    }
};
