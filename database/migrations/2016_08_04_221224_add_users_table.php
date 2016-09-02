<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('USERS', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('NAME',30);
            $table->string('LASTNAME',30);
            $table->integer('DNI');
            $table->string('EMAIL',80);
            $table->double('AVERAGE', 4, 2);
            $table->string('USERNAME',30);
            $table->string('PASSWORD',60);
            $table->integer('TEAM_ID')->unsigned()->nullable();
            $table->integer('GENDER_ID')->unsigned();

            $table->foreign('TEAM_ID')->references('ID')->on('TEAMS');
            $table->foreign('GENDER_ID')->references('ID')->on('GENDERS');

            $table->enum('TYPE',['player','owner-court','admin'])->default('player');
            $table->rememberToken();
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
        Schema::drop('USERS');
    }
}
