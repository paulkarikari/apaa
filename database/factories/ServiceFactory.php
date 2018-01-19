<?php

use Faker\Generator as Faker;
use Apaa\Models\Service\Service;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'service_name' => $faker->sentence(3),
        'description' => $faker->sentence(10),
        'user_id' => $faker->randomDigitNotNull(),
        'category_id' => $faker->randomDigitNotNull(),
    ];
});
