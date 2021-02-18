<?php

namespace Database\Seeders;

use App\Models\VehicleStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    protected $toTruncate = ['vehicle_classes', 'vehicle_types', 'vehicle_statuses' , 'roles','lines', 'service_statuses','depot_line_categories', 'depots', 'depot_lines','service_types','users', 'vehicles', 'services'];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach($this->toTruncate as $table) {
            DB::table($table)->truncate();
            $this->command->info("Truncated table: " . $table);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $this->call(VehicleClassSeeder::class);
        $this->call(VehicleTypeSeeder::class);
        $this->call(VehicleStatusSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(LineSeeder::class);
        $this->call(ServiceTypeSeeder::class);
        $this->call(ServiceStatusSeeder::class);
        $this->call(DepotLineCategorySeeder::class);



        $this->call(UserSeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(DepotSeeder::class);
        $this->call(DepotLineSeeder::class);



        // \App\Models\User::factory(10)->create();

        Model::reguard();
    }
}
