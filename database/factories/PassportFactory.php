<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Passport;
use Faker\Generator as Faker;

$factory->define(Passport::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
