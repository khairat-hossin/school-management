<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Teacher;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Factory::create();

        for($i=1; $i<=10; $i++){
            Subject::create([
                'sub_code' => $faker->randomDigit(),
                'sub_name' => $faker->word,
            ]);
    
        }

        for($i=1; $i<=5; $i++){
            Teacher::create([
                'tname' => $faker->name,
                'tregnum' => $faker->randomDigit(),
                'tsubject' => $faker->word,
                "tdob" => $faker->date(),
                "tblood_group" => $faker->bloodGroup()
            ]);
    
        }
        
    }
}
