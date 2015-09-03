<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->string('partner');
            $table->string('title')->nullable();
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
        Schema::drop('partners');
    }
}
