<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitteespecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committeespecs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loantype_id');
            $table->double('min_amount')->default(0);
            $table->double('max_amount')->default(0);
            $table->double('min_debt_asset')->default(0);
            $table->double('max_debt_asset')->default(0);
            $table->double('min_loan_asset')->default(0);
            $table->double('max_loan_asset')->default(0);
            $table->string('applicant_grade')->default(0);
            $table->integer('member_count')->default(0);
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
        Schema::drop('committeespecs');
    }
}
