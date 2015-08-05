<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoancropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loancrops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id')->unsigned();
            $table->integer('crop_id')->unsigned();
            $table->string('crop_measure')->default('bu');
            $table->string('market')->nullable();
            $table->string('gin_mill')->default('n/a');
            $table->double('bkqty')->default(0);
            $table->double('bkprice')->default(0);
            $table->double('var_harvest')->default(0);
            $table->string('harvest_measure')->default('bu');
            $table->double('rebates')->default(0);
            $table->string('rebate_measure')->default('bu');
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
        Schema::drop('loancrops');
    }
}
