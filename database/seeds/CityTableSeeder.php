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
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> e86132e4c12831e7adb170f1678218a205beba17
>>>>>>> 2f043826881fb7425b8fc888cbd95b54a837e796
       
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


<<<<<<< HEAD
            // factory(App\City::class,2)->create();
=======
<<<<<<< HEAD
            //factory(App\City::class,2)->create();
>>>>>>> 2f043826881fb7425b8fc888cbd95b54a837e796

        factory(App\City::class,3)->create()->each(
=======
            factory(App\City::class,2)->create();

         factory(App\City::class,3)->create()->each(
>>>>>>> e86132e4c12831e7adb170f1678218a205beba17
            function($city){
                //seed the relation with 3 subcategoriese
            $helpservices =factory(App\Helpservice::class,3)->make();
                $city->helpservices()->saveMany($helpservices);//relationship in category model

            });


<<<<<<< HEAD
        factory(App\City::class,2)->create();

<<<<<<< HEAD
=======
=======
            factory(App\City::class,2)->create();
>>>>>>> e86132e4c12831e7adb170f1678218a205beba17
>>>>>>> 2f043826881fb7425b8fc888cbd95b54a837e796


>>>>>>> 81c14407ce1a4da6c29c084b9339548c1522f122
    }
}
