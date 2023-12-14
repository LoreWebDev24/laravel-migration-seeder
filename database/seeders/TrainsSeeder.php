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

            $new_train->azienda = $faker->
            $new_train->codice_treno = $faker->
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->
            $new_train->orario_di_arrivo = $faker->
            $new_train->numero_carrozze = $faker->
            $new_train->in_orario = $faker->
            $new_train->cancellato = $faker->
            $new_train->in_partenza_oggi = $faker->

            // SALVO I CHANGES
            $new_train->save();
        }
    }
}
