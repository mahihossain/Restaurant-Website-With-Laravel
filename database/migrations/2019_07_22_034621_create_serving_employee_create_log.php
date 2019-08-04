<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServingEmployeeCreateLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serving_employee_create_log', function (Blueprint $table) {
            $table->integer('employee_id');
            $table->string('employee_Name');
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
        Schema::dropIfExists('serving_employee_create_log');
    }
}
