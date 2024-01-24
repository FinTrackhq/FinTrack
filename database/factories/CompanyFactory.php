<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
			'short_name' => $this->faker->firstName(),
			'type' => $this->faker->firstName(),
			'user_id' => createOrRandomFactory(\App\Models\User::class),
        ];
    }
}
