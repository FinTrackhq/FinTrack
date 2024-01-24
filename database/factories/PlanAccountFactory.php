<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlanAccountFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomNumber(),
			'company_id' => createOrRandomFactory(\App\Models\Company::class),
        ];
    }
}
