<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingInsertLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_booking_insert_log', function (Blueprint $table) {
            $table->integer('booking_id');
            $table->string('customer_Name');
            $table->string('report');
            $table->dateTime('InsertedTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_booking_insert_log');
    }
}
