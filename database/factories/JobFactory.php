<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'company_name' => $this->faker->word,
            'job_description' => $this->faker->paragraph,
            'start_at' => $this->faker->dateTimeThisMonth,
            'end_at' => $this->faker->dateTimeThisMonth,
        ];
    }
}
