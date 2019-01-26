<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Location::class, 100)->create('ne_NP');
        
    /*  $faker = Faker\Factory::create('ne_NP');

        for ($i=0; $i < 100; $i++)  {
        	Location::create([
             'district' => $faker->district,
             'city' => $faker->cityname,
             'lat' => $faker->unique()->latitude(41, 52),
              'lng' => $faker->unique()->longitude(-5, 8)
        	]);
       }*/
    }
}
