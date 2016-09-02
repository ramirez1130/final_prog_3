<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('USER_MATCH', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('USER_ID')->unsigned();
            $table->integer('MATCH_ID')->unsigned();
            $table->decimal('SCORE',4,2);
            
            $table->foreign('USER_ID')->references('ID')->on('USERS');
            $table->foreign('MATCH_ID')->references('ID')->on('MATCHES');
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
        Schema::drop('USER_MATCH');
    }
}
