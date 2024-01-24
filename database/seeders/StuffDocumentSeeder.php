<?php

namespace Database\Seeders;

use App\Models\StuffDocument;
use Illuminate\Database\Seeder;

class StuffDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        StuffDocument::factory(10)->create();
    }
}
