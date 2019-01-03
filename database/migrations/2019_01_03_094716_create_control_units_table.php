<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_units', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dist_running_sl',50);
            $table->string('trunk_no',50);
            $table->string('serial_no',100)->unique();
            $table->unsignedInteger('ware_house_id');
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
        Schema::dropIfExists('control_units');
    }
}
