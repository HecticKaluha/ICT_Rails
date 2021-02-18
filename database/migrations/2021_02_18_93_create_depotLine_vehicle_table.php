<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepotLineVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depotLine_vehicle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('depotLine_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->integer('startPosition');
            $table->integer('endPosition');

            $table->foreign('depotLine_id')->references('id')->on('depot_lines');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depotLine_vehicle');
        Schema::dropIfExists('depot_lines');

        Schema::dropIfExists('services');
        Schema::dropIfExists('runs');
        Schema::dropIfExists('lines');
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('vehicles');
    }
}
