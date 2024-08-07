<?php

namespace Database\Seeders;

use App\Models\Picture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('it_IT');


        for ($i = 0; $i < 10; $i++) {
            $newPicture = new Picture();
            $newPicture->title = $faker->name();
            $newPicture->url = $faker->imageUrl();
            $newPicture->step_id =1;
            $newPicture->save(); 

            
        }
    }
}
