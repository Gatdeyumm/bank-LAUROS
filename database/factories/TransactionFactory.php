<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => fake()->numberBetween(1,30),
            'deposit' => $dp = fake()->boolean(),
            'amount' => $dp ? fake()->numberBetween(3000,10000) : fake()->numberBetween(500,3000),
            'user_id' => 1,
        ];
    }
}
