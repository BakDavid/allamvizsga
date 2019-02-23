<?php

use Faker\Generator as Faker;

$factory->define(App\Conference::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'submission_send_start' => $faker->date,
        'submission_send_end' => $faker->dateTimeThisDecade($max = '+10 years'),
        'address' => $faker->address,
        'city' => $faker->city,
        'country' => $faker->country,
        'zipcode' => $faker->numberBetween($min = 100000, $max = 999999),
        'university' => $faker->company,
        'room' => $faker->randomDigit,
        'comment' => $faker->paragraph,
        'remember_token' => str_random(10),
    ];
});
