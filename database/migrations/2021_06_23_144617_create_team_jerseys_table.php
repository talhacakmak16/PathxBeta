<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamJerseysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_jerseys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('teamid');
            $table->integer('brandid');
            $table->integer('categoryid');
            $table->double('price');
            $table->string('image');
            $table->string('selflink');
            $table->text('info')->nullable();

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
        Schema::dropIfExists('team_jerseys');
    }
}
