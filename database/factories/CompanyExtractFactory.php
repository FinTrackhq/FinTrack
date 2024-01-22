<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyExtract>
 */
class CompanyExtractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'coming' => fake()->text(100),
            'expenditure' => fake(0)->text(100),
            'company_id' => fake()->sentence("#"),
            'payment_id' => fake()->sentence("#")
        ];
    }
}
