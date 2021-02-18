<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 200;
        if (Schema::hasTable('services') == false) {
            $this->command->warn("Seeding services failed; table 'services' doesn't exist in database...");
            return;
        }

        Service::factory()->count($amount)->create();
    }
}
