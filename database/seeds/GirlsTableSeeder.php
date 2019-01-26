<?php

use Illuminate\Database\Seeder;
use App\Girls;


class GirlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// factory(App\Girls::class, 500)->create('fr_FR');
    
        //
         $faker = Faker\Factory::create('ne_NP');

        for ($i=0; $i < 500; $i++)  {
        	Girls::create([
             'name' => $faker->name,
             'lat' => $faker->unique()->latitude(41, 52),
              'lng' => $faker->unique()->longitude(-5, 8),
              'address' => $faker->unique()->address()
        	]);
    }
}
}
