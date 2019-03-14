<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {

//$factory->define(Model::class, function (Faker $faker) {
    return [

        //
        'title' => $faker->name,
        'keywords' => $faker->name,
        'h1' => $faker->name,
        'author' => $faker->name, // secret
        'content' => $faker->sentence(2),
    ];
});
