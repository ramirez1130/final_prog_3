<?php

use Illuminate\Database\Seeder;
use App\User;
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
        DB::table('users')->insert([
            'name'      => 'Brian',
            'lastname'  => 'Ramirez',
            'dni'       => 43000100,
            'email'     => 'ramirez7358@gmail.com',
            'username'  => 'admin',
            'password'  => Hash::make('admin'),
            'type'      => 'admin',
            'gender_id' =>  1

        ]);
        factory(User::class , 50)->create();
    }
}
