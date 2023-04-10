<?php

namespace Database\Factories;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
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
            'title' => $faker->name(),
            'description' => $faker->text(200),
            'category' => $faker->name()
        ];
    }
}
