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
        DB::table('TYPES_TOURNAMENTS')->insert([
            'NAME'          =>  'league'
        ]);

        DB::table('TYPES_TOURNAMENTS')->insert([
            'NAME'          =>  'liguilla'
        ]);

        DB::table('TYPES_TOURNAMENTS')->insert([
            'NAME'          =>  'elimination'
        ]);
    }
}
