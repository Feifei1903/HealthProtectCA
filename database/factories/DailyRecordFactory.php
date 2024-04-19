<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DailyRecord>
 */
class DailyRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date,
            'amount_smoke' => $this->faker->integer,
            'daily_spent' => 10.99,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
