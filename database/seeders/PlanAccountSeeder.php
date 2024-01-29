<?php

namespace Database\Seeders;

use App\Models\PlanAccount;
use Illuminate\Database\Seeder;

class PlanAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        PlanAccount::factory()->count(71)->create();
    }
}
