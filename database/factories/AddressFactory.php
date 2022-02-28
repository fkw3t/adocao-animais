<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => "4050036f-3c31-4a1c-baa9-01a4e284430f",
            'address' => $this->faker->address(),
            'postal_code' => $this->faker->postcode(),
            'state' => $this->faker->state(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country()
        ];
    }
}
