<?php

use Faker\Generator as Faker;

$factory->define(App\Novel::class, function (Faker $faker) {
    $authorIds = \App\Author::pluck('id')->toArray();
    $categoryIds = \App\Category::pluck('id')->toArray();
    return [
        'author_id' => $authorIds[array_rand($authorIds)],
        'category_id' => $authorIds[array_rand($categoryIds)],
        'name' => $faker->word,
        'description' => $faker->paragraph,
        'cover' => $faker->imageUrl(),
        'hot' => rand(0,10000),
    ];
});
