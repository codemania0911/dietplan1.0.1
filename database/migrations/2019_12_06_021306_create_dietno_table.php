<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDietnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dietno', function (Blueprint $table) {
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
        Schema::dropIfExists('dietno');
    }
}
