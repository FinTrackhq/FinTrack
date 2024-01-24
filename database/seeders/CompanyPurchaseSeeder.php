<?php

namespace Database\Seeders;

use App\Models\CompanyPurchase;
use Illuminate\Database\Seeder;

class CompanyPurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        CompanyPurchase::factory(10)->create();
    }
}
