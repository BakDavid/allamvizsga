<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('qwe'), // secret
        'address' => $faker->address,
        'city' => $faker->city,
        'country' => $faker->country,
        'zipcode' => $faker->numberBetween($min = 100000, $max = 999999),
        'university' => $faker->company,
        'department' => $faker->company,
        'telephone' => '0789769469',
        'user_type' => 'submitter',
        'birth_date' => $faker->date,
        'gender' => 'male',
        'remember_token' => str_random(10),
    ];
});
