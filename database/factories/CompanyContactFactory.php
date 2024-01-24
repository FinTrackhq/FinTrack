<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyContactFactory extends Factory
{
    public function definition(): array
    {
        return [
            'address' => $this->faker->firstName(),
			'number' => $this->faker->randomNumber(),
			'email' => $this->faker->safeEmail(),
			'company_id' => createOrRandomFactory(\App\Models\Company::class),
        ];
    }
}
