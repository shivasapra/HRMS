<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->string('department');
            $table->string('job_title');
            $table->string('employment_status');
            $table->string('joined_date')->nullable();
            $table->string('location')->nullable();
            $table->Date('employment_contract_start_date')->nullable();
            $table->Date('employment_contract_end_date')->nullable();
            $table->boolean('terminate')->default(0);
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
        Schema::dropIfExists('job_details');
    }
}
