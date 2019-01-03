<?php

use Faker\Generator as Faker;

$factory->define(App\ControlUnit::class, function (Faker $faker) {
    return [
        'dist_running_sl' => $faker->randomDigitNotNull,
        'trunk_no'        => $faker->randomDigitnotNull,
        'serial_no'       => $faker->unique()->randomNumber,
        'ware_house_id'   => function() {
            return factory(App\WareHouse::class)->create()->id;
        },
    ];
});
