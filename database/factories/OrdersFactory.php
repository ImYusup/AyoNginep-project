<?php

use Faker\Generator as Faker;

$factory->define(App\orders::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->randomDigitNotNull
    ];
});
