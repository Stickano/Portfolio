<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'active' => true,
        'headline' => $faker->sentence(rand(1,3)),
        'project' => $faker->sentence(rand(300, 500)),
        'wiki' => $faker->sentence(rand(300,500)),
        'github_link' => $faker->url(),
        'site_link' => $faker->url()
    ];
});
