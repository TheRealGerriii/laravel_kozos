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
        DB::table("students")->insert([
            "name" => "Teszt Elek",
            "email" => "elek@valami.hu",
            "phone" => "124349759",
            "age" => 30,
            "gender" => "male",
            "address" => "Vác Kő u. 11."
        ]);
    }
}
