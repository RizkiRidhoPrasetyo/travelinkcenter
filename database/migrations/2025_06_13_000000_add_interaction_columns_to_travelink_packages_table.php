<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInteractionColumnsToTravelinkPackagesTable extends Migration
{
    public function up()
    {
        Schema::table('travelink_packages', function (Blueprint $table) {
            $table->unsignedInteger('likes')->default(0);
            $table->unsignedInteger('comments_count')->default(0);
            $table->float('average_rating', 2, 1)->default(0.0);
        });
    }

    public function down()
    {
        Schema::table('travelink_packages', function (Blueprint $table) {
            $table->dropColumn(['likes', 'comments_count', 'average_rating']);
        });
    }
}
