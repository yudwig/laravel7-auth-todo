<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'user_id' => $faker->word(),
    ];
});
