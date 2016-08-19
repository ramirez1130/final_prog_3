<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTournamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->smallInteger('price');
            $table->decimal('reward',9,4);
            $table->tinyInteger('quota');
            $table->integer('type_tournament_id')->unsigned();
            $table->integer('commission')->unsigned();

            $table->foreign('type_tournament_id')->references('id')->on('types_tournaments');
            $table->foreign('commission')->references('id')->on('commissions');
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
        Schema::drop('tournaments');
    }
}
