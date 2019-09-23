<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Client;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' =>  $faker->phoneNumber,
    ];
});
