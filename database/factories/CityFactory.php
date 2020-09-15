<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use Faker\Generator as Faker;
use App\Quarantine;
use App\Positive;
use App\Active;


$factory->define(City::class, function (Faker $faker) {
    return [
        //

        'name'=>$faker->sentence($nbWords=3)
    ];
});

$factory->define(Quarantine::class,function (Faker $faker)
{
	return [
		// 'qty'=>$faker->qty,
		'type'=>$faker->sentence($nbWords=3),
		'address'=>$faker->sentence($nbWords=3)
	];
});



$factory->define(Positive::class,function (Faker $faker)
{
	return [

		'age'=>$faker->age,
		'gender'=>$faker->gender,
		'address'=>$faker->address,
		'date'=>$faker->date

		// 'age'=>$faker->sentence($nbWords=3),
		// 'gender'=>$faker->sentence($nbWords=3),
		// 'address'=>$faker->sentence($nbWords=3),
		// 'date'=>$faker->sentence($nbWords=3)
	];
});


$factory->define(Active::class,function (Faker $faker)
{
	return [
		// 'qty'=>$faker->qty,
		'date'=>$faker->date,
		'qty'=>$faker->qty
	];
});
