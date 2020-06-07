<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'title'     => $faker->name,
        'telephone' => $faker->phoneNumber,
        'address'   => $faker->address,
        'email'     => $faker->email,
        'detail'    => $faker->text,
        'extra'     => [],
        'isRead'    => 0,

    ];
});
