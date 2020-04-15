<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Man;
use Faker\Generator as Faker;

$factory->define(Man::class, function (Faker $faker) {
    return [
        'name' => $faker->name,

    ];
});
