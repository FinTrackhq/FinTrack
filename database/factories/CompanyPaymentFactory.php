<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyPayment>
 */
class CompanyPaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account' =>  fake()->numerify('####################'),
            'bic' => fake()->numerify('#########'),
            'company_id' => fake()->sentence("#"),
        ];
    }
}
