<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DepotLineCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('depot_line_categories') == false) {
            $this->command->warn("Seeding depot_line_categories failed; table 'depot_line_categories' doesn't exist in database...");
            return;
        }

        DB::table('depot_line_categories')->insert([
            'name' => 'Incoming',
            'description' => 'The lines for incoming vehicles',
        ]);
        $this->command->info("Seeded Depot line category Incoming");

        DB::table('depot_line_categories')->insert([
            'name' => 'Outgoing',
            'description' => 'The lines for outgoing vehicles',
        ]);
        $this->command->info("Seeded Depot line category Outgoing");

        DB::table('depot_line_categories')->insert([
            'name' => 'Repairstation',
            'description' => 'The lines for repairing vehicles',
        ]);
        $this->command->info("Seeded Depot line category Repairstation");

        DB::table('depot_line_categories')->insert([
            'name' => 'Cleaningstation',
            'description' => 'The lines for cleaning vehicles',
        ]);
        $this->command->info("Seeded Depot line category Cleaningstation");
    }
}
