<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDietptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dietpt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image_url');
            $table->string('video');
            $table->string('kcal');
            $table->string('time');
            $table->string('material');
            $table->string('division');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dietpt');
    }
}
