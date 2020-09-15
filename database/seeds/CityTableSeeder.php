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

        //
       
    	factory(App\City::class,2)->create()->each(
    		function($city){
    			// seed the relation with 3 subcategories
    			$quarantines = factory(App\Quarantine::class,3)->make();
    			$city->quarantines()->saveMany($quarantines);
    			// relationship in category model
    		});


        factory(App\City::class,2)->create()->each(
            function($city){
                // seed the relation with 3 subcategories
                $positives = factory(App\Positive::class,3)->make();
                $city->positives()->saveMany($positives);
                // relationship in category model
            });


        factory(App\City::class,2)->create()->each(
            function($city){
                // seed the relation with 3 subcategories
                $actives = factory(App\Active::class,3)->make();
                $city->actives()->saveMany($actives);
                // relationship in category model
            });


            factory(App\City::class,2)->create();

    }
}
