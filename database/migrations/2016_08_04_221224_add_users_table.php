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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30);
            $table->string('lastname',30);
            $table->integer('dni');
            $table->string('email',80);
            $table->double('average', 4, 2);
            $table->string('username',30);
            $table->string('password',60);
            $table->integer('team_id')->unsigned()->nullable();
            $table->integer('gender_id')->unsigned()->nullable();

            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('gender_id')->references('id')->on('genders');

            $table->enum('type',['player','owner-court','admin'])->default('player');
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
        Schema::drop('users');
    }
}
