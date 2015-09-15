<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoantypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loantypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('loantype');
            $table->string('abr');
            $table->integer('sort_order');
            $table->integer('default_est_days')->default(215);
            $table->string('default_due_date')->default('-12-15');
            $table->double('default_int_rate')->default(12);
            $table->double('default_origination_fee_rate')->default(1);
            $table->double('default_service_fee_rate')->default(1.5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('loantypes');
    }
}
