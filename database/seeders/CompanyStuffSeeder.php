<?php

namespace Database\Seeders;

use App\Models\CompanyStuff;
use Illuminate\Database\Seeder;

class CompanyStuffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        CompanyStuff::factory(10)->create();
    }
}
