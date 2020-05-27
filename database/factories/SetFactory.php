<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Set;
use Faker\Generator as Faker;

$factory->define(Set::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
    ];
});
