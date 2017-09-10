<?php

use Faker\Generator as Faker;

$factory->define(App\Novel::class, function (Faker $faker) {
    $authorIds = \App\Author::pluck('id')->toArray();
    $categoryIds = \App\Category::pluck('id')->toArray();
    return [
        'author_id' => array_rand($authorIds),
        'category_id' => array_rand($categoryIds),
        'name' => $faker->title,
        'description' => $faker->paragraph,
        'cover' => $faker->imageUrl(),
    ];
});
