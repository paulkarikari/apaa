<?php

use Faker\Generator as Faker;
use Apaa\Models\Category\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->sentence(1),
    ];
});
