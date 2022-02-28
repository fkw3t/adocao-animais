<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post' => '555',
            'owner' => '555',
            'name' => $this->faker->name(),
            'species' => $this->faker->lastName() . " " . $this->faker->colorName(),
            'description' => $this->faker->text(),
            'age' => random_int(1, 12)
        ];
    }
}
