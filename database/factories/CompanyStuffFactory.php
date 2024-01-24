<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyStuffFactory extends Factory
{
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->firstName(),
			'birthday' => $this->faker->dateTime(),
			'phone' => $this->faker->randomNumber(),
			'email' => $this->faker->safeEmail(),
			'post' => $this->faker->firstName(),
			'company_id' => createOrRandomFactory(\App\Models\Company::class),
        ];
    }
}
