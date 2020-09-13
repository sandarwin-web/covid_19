<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Confirmed;
use Faker\Generator as Faker;

$factory->define(Confirmed::class, function (Faker $faker) {
    return [
        "date"=>$faker->date,
        "qty"=>$faker->qty,
        "city_id"=>$faker->city_id
    ];
});
