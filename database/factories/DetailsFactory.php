<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public int $crew_id = 1;
    public function definition(): array
    {
        return [
            'crew_id' => $this->crew_id++,
            'address' => fake()->address(),
            'contact_number' => fake()->phoneNumber(),
            'education' => fake()->sentence(),
        ];
    }
}
