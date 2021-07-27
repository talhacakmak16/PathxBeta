<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('selflink');
            $table->integer('categoryid');
            $table->integer('brandid');
            $table->integer('teamid');
            $table->double('price');
            $table->text('info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('special_models');
    }
}
