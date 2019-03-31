<?php

use Faker\Generator as Faker;

$factory->define(App\CategoriesRelations::class, function (Faker $faker) {
    return [
        'category_id' => rand(1,10),
        'project_id' => rand(1,10)
    ];
});
