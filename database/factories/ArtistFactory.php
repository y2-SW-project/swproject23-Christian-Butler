<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "first_name"=>$this->faker->name,
            "last_name"=>$this->faker->name,
            "genre"=>$this->faker->word,
            "date_of_birth"=>$this->faker->date,
        ];
    }
}
