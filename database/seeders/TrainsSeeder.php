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

            $new_train->azienda = $faker->randomElement(['Italo', 'Trenitalia', 'JapRail', 'Rekkles Treni', 'Lorenzo Wagons']);
            $new_train->codice_treno = $faker->unique()->numberBetween(1000, 99999999999);
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->time();
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->numero_carrozze = $faker->numberBetween(4, 22);
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();
            $new_train->in_partenza_oggi = $faker->boolean();

            // SALVO I CHANGES
            $new_train->save();
        }
    }
}
