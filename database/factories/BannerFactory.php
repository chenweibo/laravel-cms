<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Banner;
use Faker\Generator as Faker;

$factory->define(Banner::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => '描述',
        'banners' => [],

    ];
});
