<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectdish', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('dish_name');
            $table->timestamp('updated_at')->useCurrent()->nullable()->default(null)->onUpdate(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selectdish');
    }
}
