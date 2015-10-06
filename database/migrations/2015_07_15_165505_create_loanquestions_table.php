<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanquestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanquestions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id')->unique();
            //QUESTS
            $table->double('amount_requested')->default(0);
            $table->boolean('plant_own')->default(true);
            $table->string('plant_own_details')->nullable();
            $table->boolean('harvest_own')->default(true);
            $table->string('harvest_own_details')->nullable();
            $table->boolean('equip_obligations')->default(true);
            $table->string('equip_obligations_details')->nullable();
            $table->boolean('other_cash')->default(true);
            $table->string('other_cash_details')->nullable();
            $table->boolean('insInPlace')->default(true);
            $table->string('insInPlace_details')->nullable();
            $table->boolean('fsa_good')->default(true);
            $table->string('fsa_good_details')->nullable();
            $table->boolean('fci_good')->default(true);
            $table->string('fci_good_details')->nullable();
            $table->boolean('premiums_past')->default(true);
            $table->string('premiums_details')->nullable();
            $table->boolean('legal_defendant')->default(false);
            $table->string('defendant_details')->nullable();
            $table->boolean('judgements')->default(false);
            $table->string('judgement_details')->nullable();
            $table->boolean('bankruptcy')->default(false);
            $table->string('bankruptcy_details')->nullable();
            $table->boolean('bankruptcy_order')->default(false);
            $table->boolean('liens')->default(false);
            $table->string('liens_details')->nullable();
            $table->boolean('fsa_direct_pay')->default(false);
            $table->string('fsa_direct_pay_details')->nullable();
            $table->boolean('future_liabilities')->default(true);
            $table->boolean('credit_3p_available')->default(false);
            $table->string('credit_3p_details')->nullable();
            $table->double('income_percent')->default(100);
            $table->text('income_distribution_details')->nullable();
            $table->string('distributor')->nullable();
            $table->integer('agency')->nullable();
            $table->string('pesticide_number', 20)->nullable();
            $table->string('pest_num_expiration', 20)->nullable();
            $table->integer('credit_score')->default(0);
            $table->boolean('affiliates')->default(false);
            $table->text('affiliated_entities')->nullable();
            $table->text('farm_supplier_creditors')->nullable();
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
        Schema::drop('loanquestions');
    }
}
