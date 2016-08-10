<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('local')->unsigned();
            $table->integer('visitor')->unsigned();
            $table->dateTime('date');
            $table->integer('court_id')->unsigned();
            $table->integer('tournament_id')->unsigned();

            $table->foreign('local')->references('id')->on('teams');
            $table->foreign('visitor')->references('id')->on('teams');
            $table->foreign('court_id')->references('id')->on('courts');
            $table->foreign('tournament_id')->references('id')->on('tournaments');

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
        Schema::drop('matches');
    }
}
