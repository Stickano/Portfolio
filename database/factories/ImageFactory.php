<?php

use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    
    $port = false;
    $news = false;
    if (rand(0,1) == 1)
        $port = true;
    else
        $news = true;

    return [
        'news' => $news,
        'project' => $port,
        'foreign_id' => rand(1,10),
        'path' => 'path/to/image',
        'comment' => $faker->sentence(15)
    ];
});
