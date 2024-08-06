<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('it_IT');

        $userEmails = [
            'test1@admin.com',
            'test2@admin.com',
            'test3@admin.com',
        ];

        foreach ($userEmails as $email) {
            $newUser = new User();
            $newUser->name = $faker->firstName();
            $newUser->last_name = $faker->lastname();
            $name = Str::slug($newUser->name);

            $lastname = Str::slug($newUser->last_name, '_');
            $checkEmail = User::where('name', $name)->where('last_name', $lastname)->count();
            /*             if ($checkEmail) {
                $newUser->email = $name . '.' . $lastname . $checkEmail + 1 . '@gmail.com';
            } */
            //$name . '.' . $lastname . '@gmail.com';
            $newUser->email = $email;
            $newUser->password = Hash::make('password');
            $newUser->save();
        }
    }
}
