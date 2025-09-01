<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ipta_theatres', function (Blueprint $table) {
            $table->dropColumn(['title', 'description', 'image_path']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipta_theatres', function (Blueprint $table) {
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image_path')->nullable();
        });
    }
};
