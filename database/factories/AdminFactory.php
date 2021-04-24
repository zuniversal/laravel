<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        // 17
        'name' => $faker->name,
        // 'name' => $faker->unique()->safeEmail,
        'password' => bcrypt('1'),
        'nickname' => $faker->name,
        // 'remember_token' => str_random(10),
        'remember_token' => Str::random(10),
    ];
});
