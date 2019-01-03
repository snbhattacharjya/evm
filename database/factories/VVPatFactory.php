<?php

use Faker\Generator as Faker;

$factory->define(App\VVPat::class, function (Faker $faker) {
    return [
        'name' => $faker->state,
        'ware_house_id'   => function() {
            return factory(App\WareHouse::class)->create()->id;
        },
    ];
});
