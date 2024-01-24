<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyPaymentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'account' => $this->faker->randomNumber(),
			'bic' => $this->faker->randomNumber(),
			'company_id' => createOrRandomFactory(\App\Models\Company::class),
        ];
    }
}
