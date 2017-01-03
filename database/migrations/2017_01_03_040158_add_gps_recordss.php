<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGpsRecordss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('gpsdatas')->insert(
        //     ['routename' => 'krk to knl', 'routebus' => '2204', 'lat' =>'222.00', 'long' => '111.00']
        // );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //DB:dropColumn('routebus');
    }
}
