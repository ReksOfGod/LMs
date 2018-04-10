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
$factory->define(App\Stock::class, function (Faker $faker) {
    return [
        'stockName' => $faker->randomElement(['Stephen', 'Byarugaba','Lilian']),
        'stockPrice' => $faker->numberBetween($min=1000, $max=100000),
        'stockYear' => $faker->year,
    ];
});