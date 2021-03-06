<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\UserType;
use Faker\Generator as Faker;

$factory->define(UserType::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->word,
        'display_name' => ucfirst($name),
    ];
});
