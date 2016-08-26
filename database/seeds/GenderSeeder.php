<?php

use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert(['gender'=> 'Masculino']);
        DB::table('genders')->insert(['gender' => 'Femenino']);
    }
}
