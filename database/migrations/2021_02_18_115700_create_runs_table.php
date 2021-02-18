<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('line_id');
            $table->unsignedBigInteger('driverUser_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->dateTime('startTime');
            $table->dateTime('endTime');
            $table->timestamps();
            $table->foreign('line_id')->references('id')->on('lines');
            $table->foreign('driverUser_id')->references('id')->on('users');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('runs');
    }
}
