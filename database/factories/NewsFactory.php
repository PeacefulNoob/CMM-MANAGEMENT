<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title'=> $faker->name,
        'description' => $faker->paragraphs(rand(3,7),true),
        'image'=> 'sea.png',
        'user_id' => $faker->numberBetween(1,3),
    ];
});
