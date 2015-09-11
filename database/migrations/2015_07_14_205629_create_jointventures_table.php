<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJointventuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jointventures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('applicant_id')->unsigned();
            $table->string('partner');
            $table->double('percent_owned')->nullable();
            $table->string('ssn');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state_id')->nullable();
            $table->string('zip')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->integer('age')->nullable();
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
        Schema::drop('jointventures');
    }
}
