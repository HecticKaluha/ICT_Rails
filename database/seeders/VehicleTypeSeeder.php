<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('vehicle_types') == false) {
            $this->command->warn("Seeding vehicle_types failed; table 'vehicle_types' doesn't exist in database...");
            return;
        }

        DB::table('vehicle_types')->insert([
            'name' => 'Combino',
        ]);
        $this->command->info("Seeded vehicle type Combino");

        DB::table('vehicle_types')->insert([
            'name' => '11G',
        ]);
        $this->command->info("Seeded vehicle type 11G");

        DB::table('vehicle_types')->insert([
            'name' => 'Dubbel kop combino',
        ]);
        $this->command->info("Seeded vehicle type Dubbel kop combino");

        DB::table('vehicle_types')->insert([
            'name' => '12G',
        ]);
        $this->command->info("Seeded vehicle type 12G");

        DB::table('vehicle_types')->insert([
            'name' => 'Opleidingstrams',
        ]);
        $this->command->info("Seeded vehicle type Opleidingstrams:");
    }
}
