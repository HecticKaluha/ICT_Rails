<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('users') == false) {
            $this->command->warn("Seeding Users failed; table 'users' doesn't exist in database...");
            return;
        }
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@ict4rails.com',
            'email_verified_at' => Carbon::now(),
            'role_id' => 1,
            'password' => '$2y$10$/5nO7u8W.ZcG7ynVL9g5LuGYNpoBwco4lbfS9y2kpxxlyspJ5478u',
        ]);
        $this->command->info("Seeded user admin");

        DB::table('users')->insert([
            'name' => 'DepotAdmin',
            'email' => 'depotAdmin@ict4rails.com',
            'email_verified_at' => Carbon::now(),
            'role_id' => 2,
            'password' => '$2y$10$/5nO7u8W.ZcG7ynVL9g5LuGYNpoBwco4lbfS9y2kpxxlyspJ5478u',
        ]);
        $this->command->info("Seeded user depotAdmin");

        DB::table('users')->insert([
            'name' => 'Driver',
            'email' => 'driver@ict4rails.com',
            'email_verified_at' => Carbon::now(),
            'role_id' => 3,
            'password' => '$2y$10$/5nO7u8W.ZcG7ynVL9g5LuGYNpoBwco4lbfS9y2kpxxlyspJ5478u',
        ]);
        $this->command->info("Seeded user driver");

        DB::table('users')->insert([
            'name' => 'Technician',
            'email' => 'technician@ict4rails.com',
            'email_verified_at' => Carbon::now(),
            'role_id' => 4,
            'password' => '$2y$10$/5nO7u8W.ZcG7ynVL9g5LuGYNpoBwco4lbfS9y2kpxxlyspJ5478u',
        ]);
        $this->command->info("Seeded user Technician");

        DB::table('users')->insert([
            'name' => 'Cleaner',
            'email' => 'cleaner@ict4rails.com',
            'email_verified_at' => Carbon::now(),
            'role_id' => 5,
            'password' => '$2y$10$/5nO7u8W.ZcG7ynVL9g5LuGYNpoBwco4lbfS9y2kpxxlyspJ5478u',
        ]);
        $this->command->info("Seeded user Cleaner");
    }
}
