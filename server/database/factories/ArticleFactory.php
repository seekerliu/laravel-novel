<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    $novelIds = \App\Novel::pluck('id')->toArray();

    return [
        'novel_id' => array_rand($novelIds),
        'name' => $faker->title,
        'content' => $faker->text,
        'hits' => rand(0, 10000),
    ];
});
