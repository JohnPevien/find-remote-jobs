<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'laravel, php, react, vue, javascript',
            'description' => $this->faker->paragraph(5),
            'company' => $this->faker->company(),
            'location' => $this->faker->city(),
            'salary' => $this->faker->numberBetween(30000, 100000),
            'email' => $this->faker->email(),
        ];
    }
}
