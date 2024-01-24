<?php

namespace Database\Seeders;

use App\Models\CompanyExtract;
use Illuminate\Database\Seeder;

class CompanyExtractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        CompanyExtract::factory(10)->create();
    }
}
