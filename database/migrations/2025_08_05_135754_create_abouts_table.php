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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image')->nullable();
            $table->string('banner_head')->nullable();
            $table->text('banner_description')->nullable();
            $table->string('main_head')->nullable();
            $table->text('main_description')->nullable();
            $table->string('main_image')->nullable();
            $table->string('image_2')->nullable();
            $table->string('our')->nullable();
            $table->string('head_2')->nullable();
            $table->string('sub_head_1')->nullable();
            $table->text('sub_desc_1')->nullable();
            $table->string('sub_head_2')->nullable();
            $table->text('sub_desc_2')->nullable();
            $table->string('sub_head_3')->nullable();
            $table->text('sub_desc_3')->nullable();
            $table->string('rank_value_1')->nullable();
            $table->string('rank_text_1')->nullable();
            $table->string('rank_value_2')->nullable();
            $table->string('rank_text_2')->nullable();
            $table->string('rank_value_3')->nullable();
            $table->string('rank_text_3')->nullable();
            $table->string('rank_value_4')->nullable();
            $table->string('rank_text_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
