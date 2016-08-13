<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeTournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types_tournaments')->insert([
            'name'          =>  'league'
        ]);

        DB::table('types_tournaments')->insert([
            'name'          =>  'liguilla'
        ]);

        DB::table('types_tournaments')->insert([
            'name'          =>  'elimination'
        ]);
    }
}
