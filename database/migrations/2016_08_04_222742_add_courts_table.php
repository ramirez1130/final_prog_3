<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCourtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('COURTS', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('NAME',45);
            $table->string('LAT');
            $table->string('LONG');
            $table->integer('OWNER')->unsigned()->nullable();
            
            $table->foreign('OWNER')->references('ID')->on('USERS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('COURTS');
    }
}
