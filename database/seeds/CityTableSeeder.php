<?php

use Illuminate\Database\Seeder;
use App\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

<<<<<<< HEAD

        factory(App\City::class,2)->create();
=======
        //
        factory(App\City::class,3)->create()->each(
            function($city){
                //seed the relation with 3 subcategoriese
            $helpservices =factory(App\Helpservice::class,3)->make();
                $city->helpservices()->saveMany($helpservices);//relationship in category model

            });


        factory(App\City::class,2)->create();


>>>>>>> 81c14407ce1a4da6c29c084b9339548c1522f122
    }
}
