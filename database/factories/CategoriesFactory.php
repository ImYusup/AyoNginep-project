<?php

use Faker\Generator as Faker;

$factory->define(App\categories::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstNameFemale
    ];
});
