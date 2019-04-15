<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('admin_id')->unsigned();
            $table->string('ref_no', 45)->unique();
            $table->string('ship_name', 45)->nullable();
            $table->string('call_sign', 45)->nullable();
            $table->string('port_register', 45)->nullable();
            $table->string('gross_tonnage', 45)->nullable();
            $table->string('imo_number', 45)->nullable();
            $table->string('mmsi_number', 45)->nullable();
            $table->string('no_reg', 45)->nullable();
            $table->string('radio_area', 45)->nullable();
            $table->string('no_sikr', 45)->nullable();
            $table->string('berlaku_sampai', 45)->nullable();
            $table->string('cart_oru1', 45)->nullable();
            $table->string('atas_nama1', 45)->nullable();
            $table->string('cart_oru2', 45)->nullable();
            $table->string('atas_nama2', 45)->nullable();
            $table->string('thn_letak_lunas', 45)->nullable();
            $table->string('tempat_pemeriksaan', 45)->nullable();
            $table->string('tanggal_pemeriksaan', 45)->nullable();
            $table->string('daerah_pelayaran', 45)->nullable();
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
        Schema::dropIfExists('ship');
    }
}
