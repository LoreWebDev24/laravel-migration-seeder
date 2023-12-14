<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50 ; $i++) {
            $new_train = new Train();

            $new_train->reference = $faker->
            $new_train->address = $faker->
            $new_train->city = $faker->
            $new_train->postal_code = $faker->
            $new_train->state = $faker->
            $new_train->square_meters = $faker->
            $new_train->rooms = $faker->
            $new_train->bathrooms = $faker->
            $new_train->price = $faker->
            $new_train->energy_rating = $faker->
            // SALVO I CHANGES
            $new_train->save();
        }
    }
}
