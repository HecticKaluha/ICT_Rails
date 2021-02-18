<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class VehicleStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('vehicle_statuses') == false) {
            $this->command->warn("Seeding vehicle_statuses failed; table 'vehicle_statuses' doesn't exist in database...");
            return;
        }

        DB::table('vehicle_statuses')->insert([
            'name' => 'Ok',
        ]);
        $this->command->info("Seeded vehicle status Ok");

        DB::table('vehicle_statuses')->insert([
            'name' => 'Needs repair',
        ]);
        $this->command->info("Seeded vehicle class Needs repair");

        DB::table('vehicle_statuses')->insert([
            'name' => 'Needs cleaning',
        ]);
        $this->command->info("Seeded vehicle class Needs cleaning");

    }
}
