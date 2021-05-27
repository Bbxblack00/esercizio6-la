<?php

use App\Bike;
use Faker\Generator as Faker;
$factory->define(Bike::class, function (Faker $faker) {
    return [
        'brand' => $faker -> word,
        'model' => $faker -> word,
        'displacement' => $faker -> numberBetween(50, 2000),
        'max_speed' => $faker -> numberBetween(50, 220)
    ];
});