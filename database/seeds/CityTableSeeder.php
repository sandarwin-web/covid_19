<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\City::class,3)->create()->each(
            function($city){
                //seed the relation with 3 subcategoriese
            $helpservices =factory(App\Helpservice::class,3)->make();
                $city->helpservices()->saveMany($helpservices);//relationship in category model

            });

    }
}
