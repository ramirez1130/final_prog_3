<?php

use App\Models\Court;
use App\Models\Tournament;
use Faker\Generator;
use App\Models\User;
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
        'NAME'		=> $faker->firstName,
        'LASTNAME'	=> $faker->lastname,
        'DNI'		=> $faker->numberBetween(10000000,90000000),
        'EMAIL' 	=> $faker->email,
        'USERNAME'	=> $faker->username,
        'PASSWORD' 	=> Hash::make('contraseña'),
		'TEAM_ID'	=> $faker->numberBetween(1,10),
		'GENDER_ID'	=> $faker->randomElement([1,2])
    ];
});

$factory->define(Team::class, function (Generator $faker) {
    return [
        'NAME'		    => "Team " . $faker->state,
        'TOURNAMENT_ID' =>  $faker->randomElement([1,2,3,4,5,null])
    ];
});

$factory->define(Court::class, function(Generator $faker){
    return [
        'NAME'  =>  'Estadio ' . $faker->lastName,
        'LAT'   =>  $faker->latitude,
        'LONG'  =>  $faker->longitude,
        'OWNER' =>  2
    ];
});

$factory->define(Tournament::class , function (Generator $faker){
    return [
        'NAME'                  =>  'Torneo ' . $faker->colorName,
        'PRICE'                 =>  $faker->numberBetween(500,3000),
        'REWARD'                =>  $faker->randomFloat(4,10000,30000),
        'TYPE_TOURNAMENT_ID'    =>  $faker->randomElement([1,2,3]),
        'QUOTA'                 =>  $faker->numberBetween(8,32),
        'COMMISSION'            =>  1
    ];
});
