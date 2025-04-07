<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up()
    {
        Schema::create('elders', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('role');
            $table->text('short_bio');
            $table->string('social_media');
            $table->text('image'); // You might want to handle file paths here.
            $table->timestamps(); // For created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('elders');
    }
};
