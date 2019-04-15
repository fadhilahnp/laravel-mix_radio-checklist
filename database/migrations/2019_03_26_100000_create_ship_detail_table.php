<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ref_no', 45);
            $table->bigInteger('radio_id')->unsigned();
            $table->string('merk', 45)->nullable();
            $table->string('type', 45)->nullable();
            $table->string('serial_number', 45)->nullable();
            $table->string('approval', 45)->nullable();
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
        Schema::dropIfExists('ship_detail');
    }
}
