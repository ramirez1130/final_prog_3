<?php

use App\Models\Court;
use App\Models\Tournament;
use Faker\Generator;
use App\User;
use App\Models\Team;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(User::class, function (Generator $faker) {
    return [
        'name'		=> $faker->firstName,
        'lastname'	=> $faker->lastname,
        'dni'		=> $faker->numberBetween(10000000,90000000),
        'email' 	=> $faker->email,
        'username'	=> $faker->username,
        'password' 	=> Hash::make('contraseña'),
		'team_id'	=> $faker->numberBetween(1,10),
		'gender_id'	=> $faker->randomElement([1,2])
    ];
});

$factory->define(Team::class, function (Generator $faker) {
    return [
        'name'		=> "Team " . $faker->state
    ];
});

$factory->define(Court::class, function(Generator $faker){
    return [
        'name'  =>  'Estadio ' . $faker->lastName,
        'lat'   =>  $faker->latitude,
        'long'  =>  $faker->longitude,
        'owner' =>  2
    ];
});

$factory->define(Tournament::class , function (Generator $faker){
    return [
        'name'                  =>  'Torneo ' . $faker->colorName,
        'price'                 =>  $faker->numberBetween(500,3000),
        'reward'                =>  $faker->randomFloat(4,10000,30000),
        'type_tournament_id'    =>  $faker->randomElement([1,2,3]),
        'quota'                 =>  $faker->numberBetween(8,32),
        'commission'            =>  1
    ];
});
