<?php

namespace Database\Seeders;

use App\Models\CompanyWarehouse;
use Illuminate\Database\Seeder;

class CompanyWarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        CompanyWarehouse::factory(10)->create();
    }
}
