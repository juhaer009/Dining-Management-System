<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();

        });

        Schema::table('images', function (Blueprint $table) {
            $table->binary('image_data', 16777215)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }
};