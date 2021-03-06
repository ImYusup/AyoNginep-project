<?php

use Faker\Generator as Faker;

$factory->define(App\order_details::class, function (Faker $faker) {
    return [
        'order_id'=>$faker->randomDigitNotNull,
        'room_id'=>$faker->randomDigitNotNull,
        'check_in_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'check_out_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'guest'=>$faker->randomDigitNotNull
    ];
});
