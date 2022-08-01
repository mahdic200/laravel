<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('mahdi') // password
    ];
});
