<?php

namespace Database\Factories;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    

    public function definition()
    {
        $faker= FakerFactory::create();
        return [
            'sub_code' => $this->faker->randomDigit(),
            'sub_name' => $this->faker->word,
        ];
    }
}
