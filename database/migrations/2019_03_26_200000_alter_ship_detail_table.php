<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterShipDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ship_detail', function (Blueprint $table) {
            $table->index('ref_no');
            $table->foreign('ref_no')->references('ref_no')->on('ship');

            $table->index('radio_id');
            $table->foreign('radio_id')->references('id')->on('radio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ship_detail', function (Blueprint $table) {
            $table->dropForeign(['ref_no']);
            $table->dropIndex(['ref_no']);

            $table->dropForeign(['radio_id']);
            $table->dropIndex(['radio_id']);
        });
    }
}
