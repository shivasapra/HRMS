<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->string('address_street_one')->nullable();
            $table->string('address_street_two')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('work_email')->nullable();
            $table->string('other_email')->nullable();
            $table->string('emergency_name')->nullable();
            $table->string('emergency_mobile')->nullable();
            $table->string('emergency_relationship')->nullable();
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
        Schema::dropIfExists('contact_details');
    }
}
