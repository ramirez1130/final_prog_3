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
        Schema::create('TOURNAMENTS', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('NAME',100);
            $table->smallInteger('PRICE');
            $table->decimal('REWARD',9,4);
            $table->tinyInteger('QUOTA');
            $table->integer('TYPE_TOURNAMENT_ID')->unsigned();
            $table->integer('COMMISSION')->unsigned();

            $table->foreign('TYPE_TOURNAMENT_ID')->references('ID')->on('TYPES_TOURNAMENTS');
            $table->foreign('COMMISSION')->references('ID')->on('COMMISSIONS');
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
        Schema::drop('TOURNAMENTS');
    }
}
