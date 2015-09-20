<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('applicant')->nullable();
            $table->string('grade')->default('F');
            $table->integer('loc_id')->nullable();
            $table->integer('entity_id')->default(2);
            $table->integer('farmer_id')->nullable();
            $table->string('ssn')->nullable();
            $table->string('email')->nullable();
            $table->date('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('state_id')->nullable();
            $table->string('zip')->nullable();
            $table->boolean('rup')->default(false);
            $table->string('rup_num')->nullable();
            $table->date('rup_exp')->nullable();
            $table->string('spouse')->nullable();
            $table->string('spouse_ssn')->nullable();
            $table->string('spouse_phone')->nullable();
            $table->string('spouse_email')->nullable();
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
        Schema::drop('applicants');
    }
}
