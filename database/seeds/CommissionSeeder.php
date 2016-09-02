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
        DB::table('COMMISSIONS')->insert([
            'COMMISSION'    =>  0.2,
            'AMOUNT'        =>  5000.0000
        ]);
    }
}
