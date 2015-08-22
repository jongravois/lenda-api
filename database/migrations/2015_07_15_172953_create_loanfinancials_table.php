<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanfinancialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanfinancials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->double('amount_requested')->nullable();
            $table->double('collateral_equipment')->default(0);
            $table->double('collateral_realestate')->default(0);
            $table->double('collateral_other')->default(0);
            $table->boolean('fee_onTotal')->default(1);
            $table->boolean('dist_buyDown')->default(0);
            $table->double('int_percent_arm')->default(0);
            $table->double('int_percent_arm_default')->default(0);
            $table->double('int_percent_arm_orig')->default(0);
            $table->double('int_percent_dist')->default(0);
            $table->double('int_percent_dist_default')->default(0);
            $table->double('int_percent_dist_orig')->default(0);
            $table->double('int_percent_other')->default(0);
            $table->double('int_percent_other_default')->default(0);
            $table->double('int_percent_other_orig')->default(0);
            $table->double('fee_processing')->default(0);
            $table->double('fee_service')->default(0);
            $table->double('fee_service_dist')->default(0);
            $table->double('max_loan')->default(0);
            $table->double('max_rate')->default(0);
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
        Schema::drop('loanfinancials');
    }
}
