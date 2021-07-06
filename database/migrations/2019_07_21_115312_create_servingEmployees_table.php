<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServingEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serving_employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phoneNo');
            $table->string('father_name');
            $table->string('mother_name');
            $table->integer('PhouseNo');
            $table->string('Plocation');
            $table->string('Pstreet');
            $table->string('Pthana');
            $table->string('Pdistrict');
            $table->integer('Ppostcode');
            $table->integer('RhouseNo');
            $table->string('Rlocation');
            $table->string('Rstreet');
            $table->string('Rthana');
            $table->string('Rdistrict');
            $table->integer('Rpostcode');
            $table->date('dob');
            $table->string('job_title');
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
        Schema::dropIfExists('serving_employees');
    }
}
