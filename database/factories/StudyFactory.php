<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Study>
 */
class StudyFactory extends Factory
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
            'school_name' => $this->faker->word,
            'education_level' => $this->faker->word,
            'start_at' => $this->faker->dateTimeThisMonth,
            'end_at' => $this->faker->dateTimeThisMonth,
        ];
    }
}
