<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Design;
use Faker\Generator as Faker;

$factory->define(Design::class, function (Faker $faker) {
    return [
        'title'=> $faker->name,
        'description' => $faker->paragraphs(rand(3,7),true),
        'user_id' => $faker->numberBetween(1,3),

    ];
});
