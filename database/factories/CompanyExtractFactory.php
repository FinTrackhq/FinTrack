<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyExtractFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
			'coming' => $this->faker->firstName(),
			'expenditure' => $this->faker->firstName(),
			'payment_id' => createOrRandomFactory(\App\Models\Payment::class),
			'company_id' => createOrRandomFactory(\App\Models\Company::class),
        ];
    }
}
