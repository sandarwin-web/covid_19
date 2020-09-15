<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\Helpservice;
use App\Recovered;

use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->sentence($nbWords=3)
    ];
    });

    $factory->define(Helpservice::class, function (Faker $faker) {
    return [
        'name' =>$faker->sentence($nbWords =3),
        'address' =>$faker->sentence($nbWords =3),
         'time' =>$faker->sentence($nbWords =3),
          'opening_day' =>$faker->sentence($nbWords =3),
           'contact' =>$faker->sentence($nbWords =3)
    ];
});
   
