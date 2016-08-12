<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(GenderSeeder::class);
    	$this->call(TeamSeeder::class);
    	$this->call(UserSeeder::class);
        $this->call(CourtSeeder::class);
    }
}
