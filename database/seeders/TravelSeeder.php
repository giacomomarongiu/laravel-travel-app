<?php

namespace Database\Seeders;

use App\Models\Travel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('it_IT');

        for ($i = 0; $i < 10; $i++) {
            $startDate = $faker->dateTimeBetween('-1 year', 'now');
            $endDate = $faker->dateTimeBetween($startDate, '+1 month');
            $newTravel = new Travel();
            $newTravel->name = $faker->city;
            $newTravel->user_id = 1;
            $newTravel->description = $faker->paragraph;
            $newTravel->start_date = $startDate->format('Y-m-d');
            $newTravel->end_date = $endDate->format('Y-m-d');
            $newTravel->save();
        }
    }
}
