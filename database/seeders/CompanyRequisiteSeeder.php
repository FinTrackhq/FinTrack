<?php

namespace Database\Seeders;

use App\Models\CompanyRequisite;
use Illuminate\Database\Seeder;

class CompanyRequisiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        CompanyRequisite::factory(10)->create();
    }
}
