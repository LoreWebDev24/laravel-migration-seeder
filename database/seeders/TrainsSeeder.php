<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
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

            $cities = $this->getCities();
            $start = $faker->dateTimeThisMonth();
            $end =  $faker->dateTimeInInterval($start,'+5 hours');

            $new_train->azienda = $faker->randomElement(['Italo', 'Trenitalia', 'JapRail', 'Rekkles Treni', 'Lorenzo Wagons']);
            $new_train->codice_treno = $faker->unique()->numberBetween(1000, 99999999999);
            $new_train->stazione_di_partenza = $cities[0];
            $new_train->stazione_di_arrivo = $cities[1];
            $new_train->data_orario_di_partenza = $start;
            $new_train->data_orario_di_arrivo = $end;
            $new_train->numero_carrozze = $faker->numberBetween(4, 22);
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();
            // $new_train->in_partenza_oggi = true;

            // SALVO I CHANGES
            $new_train->save();
        }
    }

    public function getCities () {

        // $allCities = ['Milano', 'Norimberga'.'Pescara' . 'Roma' . 'Bologna' . 'Catanzaro' . 'Napoli' . 'Cuneo' . 'Bergamo' . 'Brescia'];

        // $cities = array_rand($allCities,2);

        return ['Milano','Pescara'];
    }
}
