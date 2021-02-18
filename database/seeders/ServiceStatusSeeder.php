<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ServiceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('service_statuses') == false) {
            $this->command->warn("Seeding service_statuses failed; table 'service_statuses' doesn't exist in database...");
            return;
        }

        DB::table('service_statuses')->insert([
            'name' => 'Awaiting',
        ]);
        $this->command->info("Seeded service_status awaiting");

        DB::table('service_statuses')->insert([
            'name' => 'Doing',
        ]);
        $this->command->info("Seeded service_status doing");

        DB::table('service_statuses')->insert([
            'name' => 'Done',
        ]);
        $this->command->info("Seeded service_status done");

    }
}
