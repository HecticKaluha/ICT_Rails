<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('roles') == false) {
            $this->command->warn("Seeding Roles failed; table 'roles' doesn't exist in database...");
            return;
        }

        DB::table('roles')->insert([
            'name' => 'Admin',
        ]);
        $this->command->info("Seeded role Admin");

        DB::table('roles')->insert([
            'name' => 'Depot admin',
        ]);
        $this->command->info("Seeded role Depot admin");

        DB::table('roles')->insert([
            'name' => 'Driver',
        ]);
        $this->command->info("Seeded role Driver");

        DB::table('roles')->insert([
            'name' => 'Technician',
        ]);
        $this->command->info("Seeded role Technician");

        DB::table('roles')->insert([
            'name' => 'Cleaner',
        ]);
        $this->command->info("Seeded role Cleaner");
    }
}
