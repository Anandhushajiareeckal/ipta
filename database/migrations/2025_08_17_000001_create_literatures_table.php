<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('literatures', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['poem', 'story', 'book review']);
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->json('images')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('literatures');
    }
};
