<?php

namespace Database\Seeders;

use App\Models\CompanySale;
use Illuminate\Database\Seeder;

class CompanySaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        CompanySale::factory(10)->create();
    }
}
