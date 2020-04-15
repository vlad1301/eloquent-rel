<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Woman;
use Faker\Generator as Faker;

$factory->define(Woman::class, function (Faker $faker) {
    return [
        'name' => $faker->name,

    ];
});
