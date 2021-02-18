<?php

namespace Database\Seeders;

use App\Models\Depot;
use App\Models\DepotLine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DepotLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 77;
        if (Schema::hasTable('depot_lines') == false) {
            $this->command->warn("Seeding depot_lines failed; table 'depot_lines' doesn't exist in database...");
            return;
        }
        DepotLine::factory()->count($amount)->create();
    }
}
