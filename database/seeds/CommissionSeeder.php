<?php

use Illuminate\Database\Seeder;

class CommissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commissions')->insert([
            'commission'    =>  0.2,
            'amount'        =>  5000.0000
        ]);
    }
}
