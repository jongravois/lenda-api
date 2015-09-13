<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddendumfinancialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addendumfinancials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('addendumloan_id');
            $table->boolean('cpa_financials')->default(0);
            $table->boolean('bankruptcy')->default(0);
            $table->boolean('judgements')->default(0);
            $table->double('experience')->default(0);
            $table->double('credit_score')->default(0);
            $table->string('grade')->default('F');
            $table->double('amount_requested')->default(0);
            $table->double('total_acres')->default(0); //calc
            $table->double('year_1_revenue')->default(0);
            $table->double('year_1_expenses')->default(0);
            $table->double('year_2_revenue')->default(0);
            $table->double('year_2_expenses')->default(0);
            $table->double('year_3_revenue')->default(0);
            $table->double('year_3_expenses')->default(0);
            $table->double('current_assets')->default(0);
            $table->double('current_assets_factor')->default(85);
            $table->double('current_assets_liability')->default(0);
            $table->double('intermediate_assets')->default(0);
            $table->double('intermediate_assets_factor')->default(60);
            $table->double('intermediate_assets_liability')->default(0);
            $table->double('fixed_assets')->default(0);
            $table->double('fixed_assets_factor')->default(75);
            $table->double('fixed_assets_liability')->default(0);
            $table->double('debt2asset_ratio')->default(0);
            $table->double('debt2asset_ratio_adj')->default(0);
            $table->double('ratio_current')->default(0);
            $table->double('ratio_current_adj')->default(0);
            $table->double('capWork')->default(0);
            $table->double('capWork_adj')->default(0);
            $table->double('capBorrow')->default(0);
            $table->double('capBorrow_adj')->default(0);
            $table->double('guaranty')->default(0); //calc
            $table->double('prod')->default(0); //calc
            $table->double('adj_prod')->default(0); //calc
            $table->double('disc_prod_percent')->default(50);
            $table->double('non_rp_percent')->default(0);
            $table->double('claims_percent')->default(20);
            $table->double('fsa_assignment_percent')->default(20);
            $table->double('collateral_equipment')->default(0);
            $table->double('equipment_percent')->default(20);
            $table->double('collateral_realestate')->default(0);
            $table->double('realestate_percent')->default(40);
            $table->double('disc_prod')->default(0); //calc
            $table->double('disc_adj_prod')->default(0); //calc
            $table->double('ins_disc_prod')->default(0); //calc
            $table->double('disc_ins_percent')->default(20);
            $table->double('disc_ins')->default(0); //calc
            $table->double('commit_arm')->default(0);
            $table->double('commit_dist')->default(0);
            $table->double('commit_other')->default(0);
            $table->double('commit_total')->default(0);
            $table->double('fee_processing')->default(0);
            $table->double('proc_fee')->default(0); //calc
            $table->double('proc_fee_arm_only')->default(0);
            $table->boolean('fee_processing_onTotal')->default(1);
            $table->double('fee_service')->default(0);
            $table->double('srvc_fee')->default(0); //calc
            $table->double('srvc_fee_arm_only')->default(0);
            $table->boolean('fee_service_onTotal')->default(1);
            $table->double('total_fee_percent')->default(0); //calc
            $table->double('fee_total')->default(0); //calc
            $table->double('total_fsa_payment')->default(0); //calc
            $table->double('total_claims')->default(0); //calc
            $table->double('principal_arm')->default(0); //calc
            $table->double('principal_dist')->default(0); //calc
            $table->double('principal_other')->default(0); //calc
            $table->double('principal')->default(0); //calc
            $table->double('int_percent_arm')->default(0);
            $table->double('int_arm')->default(0); //calc
            $table->double('int_percent_dist')->default(0);
            $table->double('int_dist')->default(0); //calc
            $table->double('int_percent_other')->default(0);
            $table->double('int_other')->default(0); //calc
            $table->double('interest')->default(0); //calc
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
        Schema::drop('addendumfinancials');
    }
}
