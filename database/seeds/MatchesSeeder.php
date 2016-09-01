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
            'visitor'       =>  4,
            'date'          =>  "2016-08-17",
            'court_id'      =>  2,
            'tournament_id' =>  1
        ]);

        DB::table('matches')->insert([
            'local'         =>  2,
            'visitor'       =>  4,
            'date'          =>  "2016-08-17",
            'court_id'      =>  2,
            'tournament_id' =>  1
        ]);

        DB::table('matches')->insert([
            'local'         =>  3,
            'visitor'       =>  4,
            'date'          =>  "2016-08-17",
            'court_id'      =>  2,
            'tournament_id' =>  1
        ]);
    }
}
