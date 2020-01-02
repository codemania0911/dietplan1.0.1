<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipenoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipeno', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('diet_id');
            $table->string('recipe_description');
            $table->string('recipe_no');
            $table->string('recipe_img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipeno');
    }
}
