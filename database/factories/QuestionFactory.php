<?php

use Faker\Generator as Faker;




$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5, 8)), '.'),
        'body' => $faker->paragraphs(rand(2, 4), true),
        'views' => rand(0, 10),
        'answers' => rand(0, 10),
        'votes' => rand(-3, 10)
    ];
});
