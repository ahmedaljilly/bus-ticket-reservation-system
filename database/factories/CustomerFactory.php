<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
    ];
});
