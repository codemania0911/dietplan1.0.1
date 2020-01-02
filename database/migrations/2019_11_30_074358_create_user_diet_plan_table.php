<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDietPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_diet_plan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_key_num');
            $table->string('country');
            $table->string('breakfast');
            $table->string('brunch');
            $table->string('lunch');
            $table->string('dinner');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_diet_plan');
    }
}
