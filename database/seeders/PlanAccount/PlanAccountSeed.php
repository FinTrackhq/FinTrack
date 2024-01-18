<?php

namespace Database\Seeders\PlanAccount;

use App\Models\PlanAccount;
use Illuminate\Database\Seeder;

class PlanAccountSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlanAccount::factory(5)
            ->create();
    }
}
