<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'last_name' => fake()->lastName,
            'first_name' => fake()->firstName,
            'middle_name' => fake()->lastName,
            'phone_number' => fake()->phoneNumber,
            'address' => fake()->address,
            'birth_date' => fake()->date(now()->subYears(18)),
            'initial_deposit' => fake()->numberBetween(10000,30000)
        ];
    }
}
