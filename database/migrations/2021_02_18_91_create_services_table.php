<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('registerUser_id');
            $table->unsignedBigInteger('serviceUser_id')->nullable();
            $table->unsignedBigInteger('vehicle_id');
            $table->unsignedBigInteger('serviceType_id');
            $table->unsignedBigInteger('serviceStatus_id');
            $table->integer('estimatedTime')->nullable();
            $table->dateTime('startTime')->nullable();
            $table->dateTime('endTime')->nullable();
            $table->timestamps();

            $table->foreign('registerUser_id')->references('id')->on('users');
            $table->foreign('serviceUser_id')->references('id')->on('users');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->foreign('serviceType_id')->references('id')->on('service_types');
            $table->foreign('serviceStatus_id')->references('id')->on('service_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');

        Schema::dropIfExists('users');
        Schema::dropIfExists('vehicles');
        Schema::dropIfExists('service_types');
        Schema::dropIfExists('service_statuses');
    }
}
