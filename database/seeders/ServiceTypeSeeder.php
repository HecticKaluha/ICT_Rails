<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('service_types') == false) {
            $this->command->warn("Seeding service_types failed; table 'service_types' doesn't exist in database...");
            return;
        }

        DB::table('service_types')->insert([
            'name' => 'Small repair',
            'max' => 4,
        ]);
        $this->command->info("Seeded service_types small repair");

        DB::table('service_types')->insert([
            'name' => 'Big repair',
            'max' => 1,
        ]);
        $this->command->info("Seeded service_types Big repair");

        DB::table('service_types')->insert([
            'name' => 'Small clean',
            'max' => 10,
        ]);
        $this->command->info("Seeded service_types small clean");

        DB::table('service_types')->insert([
            'name' => 'Big clean',
            'max' => 10,
        ]);
        $this->command->info("Seeded service_types Big clean");

    }
}
