<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TEAMS', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('NAME',50);
            $table->integer('TOURNAMENT_ID')->unsigned()->nullable();

            $table->foreign('TOURNAMENT_ID')->references('ID')->on('TOURNAMENTS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('TEAMS');
    }
}
