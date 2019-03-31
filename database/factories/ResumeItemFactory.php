<?php

use Faker\Generator as Faker;

$factory->define(App\ResumeItem::class, function (Faker $faker) {
    return [
        'headline' => $faker->sentence(rand(1,3)),
        'sub_headline' => $faker->sentence(rand(1,3)),
        'comment' => $faker->sentence(rand(15, 55))
    ];
});
