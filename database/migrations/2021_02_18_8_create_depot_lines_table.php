<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepotLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depot_lines', function (Blueprint $table) {
            $table->id();
            $table->integer('lineNr')->unique();
            $table->unsignedBigInteger('depot_Id');
            $table->unsignedBigInteger('depotLineCategory_Id');
            $table->integer('length');
            $table->boolean('blocked')->default(false);
            $table->timestamps();

            $table->foreign('depotLineCategory_Id')->references('id')->on('depot_line_categories');
            $table->foreign('depot_Id')->references('id')->on('depots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depot_lines');
    }
}
