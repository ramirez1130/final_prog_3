<?php

use Illuminate\Database\Seeder;

class MatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert([
            'local'         =>  1,
            'visitor'       =>  2,
            'date'          =>  "2016-08-17",
            'court_id'      =>  1,
            'tournament_id' =>  1
        ]);
    }
}
