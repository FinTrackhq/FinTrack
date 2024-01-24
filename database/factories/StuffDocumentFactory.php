<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CompanyStuff;
use Illuminate\Database\Eloquent\Factories\Factory;

class StuffDocumentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'passport_series' => $this->faker->randomNumber(),
			'passport_number' => $this->faker->randomNumber(),
			'passport_issued' => $this->faker->firstName(),
			'passport_date' => $this->faker->dateTime(),
			'snils' => $this->faker->randomNumber(),
			'stuff_id' => createOrRandomFactory(CompanyStuff::class),
			'company_id' => createOrRandomFactory(Company::class),
        ];
    }
}
