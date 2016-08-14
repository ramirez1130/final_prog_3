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
        'dni'		=> $faker->bankAccountNumber,
        'email' 	=> $faker->email,
        'username'	=> $faker->username,
        'password' 	=> Hash::make('contraseña'),
		'team_id'	=> $faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
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
        'owner' =>  1
    ];
});

$factory->define(Tournament::class , function (Generator $faker){
    return [
        'name'              =>  'Torneo ' . $faker->colorName,
        'price'             =>  $faker->randomFloat(null , 0, 2000),
        'type_tournament_id'   => $faker->randomElement([1,2,3])
    ];
});
