<?php

namespace Database\Seeders;

use App\Models\CompanyContact;
use Illuminate\Database\Seeder;

class CompanyContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        CompanyContact::factory(10)->create();
    }
}
