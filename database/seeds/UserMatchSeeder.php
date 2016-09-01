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
        DB::table('user_match')->insert([
            'user_id'   =>  2,
            'match_id'  =>  1,
            'score'     =>  7
        ]);

        DB::table('user_match')->insert([
            'user_id'   =>  2,
            'match_id'  =>  2,
            'score'     =>  5
        ]);

        DB::table('user_match')->insert([
            'user_id'   =>  2,
            'match_id'  =>  3,
            'score'     =>  2
        ]);
    }
}
