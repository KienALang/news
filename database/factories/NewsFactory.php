<?php

use Faker\Generator as Faker;

$factory->define(App\Models\News::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'preview' => $faker->text($maxNbChars = 100),
        'detail' => $faker->text($maxNbChars = 200),
        'path' => "images/upload/".$faker->numberBetween($min = 1, $max = 1000).".jpg"
    ];
});
