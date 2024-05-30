<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->start_station = $faker->randomElement(['Torino','Napoli','Roma','Milano' ]);
            $newTrain->finish_station = $faker->randomElement(['Salermo','Calabria','Palermo','Firenze' ]);
            $newTrain->departure_timedate = $faker->dateTimeBetween();
            $newTrain->arrival_timedate = $faker->dateTimeBetween();
            $newTrain->train_code = $faker->randomDigit();
            $newTrain->wagons_number= $faker->numberBetween(5, 10);
            $newTrain->time_on = $faker->boolean();
            $newTrain->time_off = $faker->boolean();
            $newTrain->save();
        }
    }
}
