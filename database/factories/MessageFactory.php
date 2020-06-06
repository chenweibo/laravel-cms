<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Message;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'telephone' => $faker->phoneNumber,
        'address' => $faker->address,
        'email' => $faker->email,
        'detail' => $faker->text,
        'extra' => [],
        'isRead'=>0

    ];
});
