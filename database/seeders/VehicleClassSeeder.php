<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class VehicleClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('vehicle_classes') == false) {
            $this->command->warn("Seeding vehicle_classes failed; table 'vehicle_classes' doesn't exist in database...");
            return;
        }

        DB::table('vehicle_classes')->insert([
            'name' => 'Tram',
        ]);
        $this->command->info("Seeded vehicle class Tram");

        DB::table('vehicle_classes')->insert([
            'name' => 'Train',
        ]);
        $this->command->info("Seeded vehicle class Train");

        DB::table('vehicle_classes')->insert([
            'name' => 'Bus',
        ]);
        $this->command->info("Seeded vehicle class Bus");

        DB::table('vehicle_classes')->insert([
            'name' => 'Boat',
        ]);
        $this->command->info("Seeded vehicle class Boat");


        DB::table('vehicle_classes')->insert([
            'name' => 'Metro',
        ]);
        $this->command->info("Seeded vehicle class Metro");

        DB::table('vehicle_classes')->insert([
            'name' => 'Car',
        ]);
        $this->command->info("Seeded vehicle class Car");
    }
}
