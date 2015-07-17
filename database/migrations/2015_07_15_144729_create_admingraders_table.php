<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmingradersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admingraders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grade');
            $table->double('debt2asset');
            $table->double('current_ratio');
            $table->double('working_capital');
            $table->double('borrowing_capacity');
            $table->double('years_farming');
            $table->double('credit_score');
            $table->boolean('cpa_financials');
            $table->boolean('bankruptcy');
            $table->boolean('judgement');
            $table->double('all_max_loan');
            $table->double('ag_pro_max_loan');
            $table->double('capital_bridge_max_loan');
            $table->double('ag_vest_max_loan');
            $table->double('ag_pro_max_rate');
            $table->double('capital_bridge_max_rate');
            $table->double('ag_vest_max_rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admingraders');
    }
}
