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
            $table->double('disc_percent_crop')->default(50);
            $table->double('disc_percent_fsa')->default(20);
            $table->double('disc_percent_ins')->default(20);
            $table->double('disc_percent_insoyield')->default(20);
            $table->double('disc_percent_nonrp')->default(20);
            $table->double('disc_percent_rphpe')->default(10);
            $table->double('disc_percent_suppins')->default(20);
            $table->double('disc_percent_prod')->default(50);
            $table->double('disc_percent_equipment')->default(20);
            $table->double('disc_percent_realestate')->default(40);
            $table->double('disc_percent_other')->default(100);
            $table->double('amount_requested')->default(0);
            $table->double('collateral_equipment')->default(0);
            $table->double('collateral_realestate')->default(0);
            $table->boolean('fee_onTotal')->default(1);
            $table->double('int_percent_arm')->default(0);
            $table->double('int_percent_dist')->default(0);
            $table->double('int_percent_other')->default(0);
            $table->double('total_fsa_payment')->default(0); //calc
            $table->double('total_claims')->default(0); //calc
            $table->double('total_fee_percent')->default(0); //calc
            $table->double('commit_arm')->default(0);
            $table->double('commit_dist')->default(0);
            $table->double('commit_other')->default(0);
            $table->double('commit_total')->default(0);
            $table->double('fee_processing')->default(0);
            $table->double('proc_fee')->default(0); //calc
            $table->double('proc_fee_arm_only')->default(0);
            $table->double('fee_service')->default(0);
            $table->double('srvc_fee')->default(0); //calc
            $table->double('srvc_fee_arm_only')->default(0);
            $table->double('fee_total')->default(0); //calc
            $table->double('principal_arm')->default(0); //calc
            $table->double('principal_dist')->default(0); //calc
            $table->double('principal_other')->default(0); //calc
            $table->double('principal')->default(0); //calc
            $table->double('int_arm')->default(0); //calc
            $table->double('int_dist')->default(0); //calc
            $table->double('int_other')->default(0); //calc
            $table->double('interest')->default(0); //calc
            $table->double('guaranty')->default(0); //calc
            $table->double('prod')->default(0); //calc
            $table->double('adj_prod')->default(0); //calc
            $table->double('disc_prod')->default(0); //calc
            $table->double('disc_adj_prod')->default(0); //calc
            $table->double('ins_disc_prod')->default(0); //calc
            $table->double('disc_ins')->default(0); //calc
            $table->double('total_revenue')->default(0); //calc
            $table->double('arm_and_dist')->default(0); //calc
            $table->double('collateral')->default(0);
            $table->double('total_balance')->default(0);
            $table->double('remaining_balance')->default(0); //calc
            $table->double('balance_paid')->default(0);
            $table->double('cash_flow')->default(0); //calc
            $table->double('risk')->default(0); //calc
            $table->double('risk_adj')->default(0); //calc
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
