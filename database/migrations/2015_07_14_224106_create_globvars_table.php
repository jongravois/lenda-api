<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobvarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('globvars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crop_year')->default(2015);
            $table->string('season')->default('S');
            $table->double('int_percent_arm')->default(9);
            $table->double('int_percent_dist')->default(7.5);
            $table->double('min_proc_fee')->default(330);
            $table->double('proc_fee_rate')->default(1);
            $table->double('svc_fee_rate')->default(1.5);
            $table->double('projected_crops_discount_rate')->default(50);
            $table->double('fsa_assignment_discount_rate')->default(20);
            $table->double('ins_discount_rate')->default(20);
            $table->double('nonrp_discount_rate')->default(20);
            $table->double('equipment_discount_rate')->default(50);
            $table->double('realestate_discount_rate')->default(20);
            $table->double('claims_discount_rate')->default(0);
            $table->double('current_bs_constraint')->default(85);
            $table->double('intermediate_bs_constraint')->default(60);
            $table->double('fixed_bs_constraint')->default(75);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('globvars');
    }
}
