<?php

use App\book;
use Faker\Generator as Faker;
$factory->define(book::class, function (Faker $faker) {
    return [
        'bkname' => $faker->name,
    ];
});
