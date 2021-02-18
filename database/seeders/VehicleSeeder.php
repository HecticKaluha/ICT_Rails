<?php

namespace Database\Seeders;

use App\Models\Line;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 200;
        if (Schema::hasTable('vehicles') == false) {
            $this->command->warn("Seeding vehicles failed; table 'vehicles' doesn't exist in database...");
            return;
        }

        Vehicle::factory()->count($amount)->create();
    }
}
