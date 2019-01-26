<?php

use Faker\Generator as Faker;
use App\Articles;

$factory->define(App\Articles::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->text(50),
        'body' => $faker->text(200)
    ];
});
