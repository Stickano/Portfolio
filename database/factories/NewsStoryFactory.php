<?php

use Faker\Generator as Faker;

$factory->define(App\NewsStory::class, function (Faker $faker) {
    return [
        'active' => true,
        'headline' => $faker->sentence(rand(1,4)),
        'story' => $faker->sentence(rand(100,300))
    ];
});
