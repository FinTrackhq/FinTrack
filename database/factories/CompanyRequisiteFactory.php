<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyRequisiteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'inn' => $this->faker->randomNumber(),
			'kpp' => $this->faker->randomNumber(),
			'ogrn' => $this->faker->randomNumber(),
			'company_id' => createOrRandomFactory(\App\Models\Company::class),
        ];
    }
}
