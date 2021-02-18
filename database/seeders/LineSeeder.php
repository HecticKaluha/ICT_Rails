<?php

namespace Database\Seeders;

use App\Models\Line;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 2204;
        if (Schema::hasTable('lines') == false) {
            $this->command->warn("Seeding lines failed; table 'lines' doesn't exist in database...");
            return;
        }

        Line::factory()->count($amount)->create();
    }
}
