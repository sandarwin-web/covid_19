<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\Helpservice;
use App\Recovered;

use Faker\Generator as Faker;
use App\Quarantine;
use App\Positive;
use App\Active;


$factory->define(City::class, function (Faker $faker) {
    return [

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


$factory->define(Quarantine::class,function (Faker $faker)
{
	return [
		// 'qty'=>$faker->qty,
		'type'=>$faker->sentence($nbWords=3),
		'address'=>$faker->sentence($nbWords=3)
	];
});



// $factory->define(Positive::class,function (Faker $faker)
// {
// 	return [

// 		'age'=>$faker->age,
// 		'gender'=>$faker->gender,
// 		'address'=>$faker->address,
// 		'date'=>$faker->date

<<<<<<< HEAD
		// 'age'=>$faker->sentence($nbWords=3),
		// 'gender'=>$faker->sentence($nbWords=3),
		// 'address'=>$faker->sentence($nbWords=3),
		// 'date'=>$faker->sentence($nbWords=3)
<<<<<<< HEAD
// 	];
// });


// $factory->define(Active::class,function (Faker $faker)
// {
// 	return [
// 		// 'qty'=>$faker->qty,
// 		'date'=>$faker->date,
// 		'qty'=>$faker->qty
// 	];
// });
=======
=======
>>>>>>> 585d8a961c70e0f35c1f5c70bb187942eb435ff0
	];
});


$factory->define(Active::class,function (Faker $faker)
{
	return [
		// 'qty'=>$faker->qty,
		'date'=>$faker->date,
		'qty'=>$faker->qty
	];
<<<<<<< HEAD
});
<<<<<<< HEAD
=======

   
=======
});
>>>>>>> e86132e4c12831e7adb170f1678218a205beba17
>>>>>>> 2f043826881fb7425b8fc888cbd95b54a837e796
