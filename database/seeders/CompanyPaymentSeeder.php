<?php

namespace Database\Seeders;

use App\Models\CompanyPayment;
use Illuminate\Database\Seeder;

class CompanyPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        CompanyPayment::factory(10)->create();
    }
}
