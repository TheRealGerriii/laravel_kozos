<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table("students")->insert([
            "name" => $faker->name,
            "email" => $faker->safeEmail,
            "phone" => $faker->phoneNumber,
            "age" => $faker->numberBetween(25-45),
            "gender" => $faker->randomElement([
                "male",
                "female",
                "other"
            ]),
            "address" => $faker->address
        ]);
    }
}
