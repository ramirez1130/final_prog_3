<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('USERS')->insert([
            'NAME'      => 'Brian',
            'LASTNAME'  => 'Ramirez',
            'DNI'       => 43000100,
            'EMAIL'     => 'ramirez7358@gmail.com',
            'USERNAME'  => 'admin',
            'PASSWORD'  => Hash::make('admin'),
            'TYPE'      => 'admin',
            'GENDER_ID' =>  1

        ]);
        factory(User::class , 50)->create();
    }
}
