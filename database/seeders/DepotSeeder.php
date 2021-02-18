<?php

namespace Database\Seeders;

use App\Models\Depot;
use App\Models\Line;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DepotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 4;
        if (Schema::hasTable('depots') == false) {
            $this->command->warn("Seeding depots failed; table 'depots' doesn't exist in database...");
            return;
        }

        DB::table('depots')->insert([
            'name' => 'Remise Havenstraat',
            'city' => 'Amsterdam',
            'country' => 'Netherlands',
        ]);
        $this->command->info("Seeded depot Remise Havenstraat");

        DB::table('depots')->insert([
            'name' => 'Remise Lekstraat',
            'city' => 'Amsterdam',
            'country' => 'Netherlands',
        ]);
        $this->command->info("Seeded depot Remise Lekstraat");

        Depot::factory()->count($amount)->create();
    }
}
