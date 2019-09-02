<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('unique_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('driving_license_number')->nullable();
            $table->string('license_expiry_date')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('nationality')->nullable();
            $table->Date('DOB')->nullable();
            $table->string('gender')->nullable();
            $table->string('avatar')->nullable();
            $table->string('report_to_name')->nullable();
            $table->string('report_to_supervisor')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
