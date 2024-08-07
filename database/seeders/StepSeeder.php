<?php

namespace Database\Seeders;

use App\Models\Step;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('it_IT');

        for ($i = 0; $i < 10; $i++) {

            $newTravel = new Step();
            $newTravel->travel_id = 2;
            $newTravel->start_place= $faker->city();
            $newTravel->end_place= $faker->city();
            
            $newTravel->save();
        }
    }
}
