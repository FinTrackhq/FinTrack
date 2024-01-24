<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyPurchaseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
			'quantity' => $this->faker->randomNumber(),
			'price' => $this->faker->randomFloat(),
			'summary' => $this->faker->randomFloat(),
			'warehouse_id' => createOrRandomFactory(\App\Models\Warehouse::class),
			'plan_account_id' => createOrRandomFactory(\App\Models\PlanAccount::class),
			'company_id' => createOrRandomFactory(\App\Models\Company::class),
        ];
    }
}
