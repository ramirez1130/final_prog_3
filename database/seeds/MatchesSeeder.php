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
        DB::table('MATCHES')->insert([
            'LOCAL'         =>  1,
            'VISITOR'       =>  4,
            'DATE'          =>  "2016-08-17",
            'COURT_ID'      =>  2,
            'TOURNAMENT_ID' =>  1
        ]);

        DB::table('MATCHES')->insert([
            'LOCAL'         =>  2,
            'VISITOR'       =>  4,
            'DATE'          =>  "2016-08-17",
            'COURT_ID'      =>  2,
            'TOURNAMENT_ID' =>  1
        ]);

        DB::table('MATCHES')->insert([
            'LOCAL'         =>  3,
            'VISITOR'       =>  4,
            'DATE'          =>  "2016-08-17",
            'COURT_ID'      =>  2,
            'TOURNAMENT_ID' =>  1
        ]);
    }
}
