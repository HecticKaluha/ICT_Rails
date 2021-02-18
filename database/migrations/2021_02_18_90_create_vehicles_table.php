<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicleNr')->unique();
            $table->unsignedBigInteger('vehicleType_id');
            $table->unsignedBigInteger('vehicleClass_id');
            $table->unsignedBigInteger('vehicleStatus_id');
            $table->integer('length');
            $table->timestamps();

            $table->foreign('vehicleType_id')->references('id')->on('vehicle_types');
            $table->foreign('vehicleClass_id')->references('id')->on('vehicle_classes');
            $table->foreign('vehicleStatus_id')->references('id')->on('vehicle_statuses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');

        Schema::dropIfExists('vehicles_types');
        Schema::dropIfExists('vehicles_classes');
        Schema::dropIfExists('vehicles_statuses');
    }
}
