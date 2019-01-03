<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVVPatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_v_pats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dist_running_sl',50);
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
        Schema::dropIfExists('v_v_pats');
    }
}
