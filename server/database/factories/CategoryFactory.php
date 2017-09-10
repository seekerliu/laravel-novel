<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $name = $faker->word;

    return [
        'name' => $name,
        'alias' => $name,
    ];
});
