<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('package_likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id')->constrained('travelink_packages')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['package_id', 'user_id']);
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('package_likes');
    }
};
