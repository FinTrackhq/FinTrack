<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StuffStatementFactory extends Factory
{
    public function definition(): array
    {
        return [
            'salary_10' => $this->faker->randomNumber(),
			'salary_25' => $this->faker->randomNumber(),
			'salary' => $this->faker->randomNumber(),
			'stuff_id' => createOrRandomFactory(\App\Models\Stuff::class),
			'company_id' => createOrRandomFactory(\App\Models\Company::class),
        ];
    }
}
