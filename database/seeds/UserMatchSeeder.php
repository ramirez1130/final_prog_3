<?php

use Illuminate\Database\Seeder;

class UserMatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('USER_MATCH')->insert([
            'USER_ID'   =>  2,
            'MATCH_ID'  =>  1,
            'SCORE'     =>  7
        ]);

        DB::table('USER_MATCH')->insert([
            'USER_ID'   =>  2,
            'MATCH_ID'  =>  2,
            'SCORE'     =>  5
        ]);

        DB::table('USER_MATCH')->insert([
            'USER_ID'   =>  2,
            'MATCH_ID'  =>  3,
            'SCORE'     =>  2
        ]);
    }
}
