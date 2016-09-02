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
        Schema::create('MATCHES', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('LOCAL')->unsigned();
            $table->integer('VISITOR')->unsigned();
            $table->dateTime('DATE');
            $table->integer('COURT_ID')->unsigned();
            $table->integer('TOURNAMENT_ID')->unsigned();

            $table->foreign('LOCAL')->references('ID')->on('TEAMS');
            $table->foreign('VISITOR')->references('ID')->on('TEAMS');
            $table->foreign('COURT_ID')->references('ID')->on('COURTS');
            $table->foreign('TOURNAMENT_ID')->references('ID')->on('TOURNAMENTS');

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
        Schema::drop('MATCHES');
    }
}
