<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('applicant_id')->unsigned();
            $table->string('corporation');
            $table->string('ssn');
            $table->string('address');
            $table->string('city');
            $table->string('state_id');
            $table->string('zip');
            $table->string('email');
            $table->string('phone');
            $table->text('description');
            $table->string('president');
            $table->string('vicepresident');
            $table->string('secretary');
            $table->string('treasurer');
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
        Schema::drop('corporations');
    }
}
