<?php

namespace Database\Seeders;

use App\Models\StuffStatement;
use Illuminate\Database\Seeder;

class StuffStatementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        StuffStatement::factory(10)->create();
    }
}
