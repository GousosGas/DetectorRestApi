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

$factory->define(App\DetectionInfo::class, function (Faker $faker) {
    return [
        'public_id' => str_random(10),
        'user_ip' => $faker->ipv4,
        'device' => $faker->word,
        'operating_system' =>$faker->word
    ];
});
