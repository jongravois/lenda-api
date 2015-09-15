<?php

use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermsmodificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termsmodifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id')->unsigned();
            $table->date('modification_date')->default(Carbon::now());
            $table->date('due_date');
            $table->double('est_days');
            $table->double('int_percent_arm');
            $table->double('int_percent_dist');
            $table->double('fee_processing_arm');
            $table->double('fee_service_arm');
            $table->double('fee_processing_dist');
            $table->double('fee_service_dist');
            $table->double('fee_processing_borrower');
            $table->double('fee_service_borrower');
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
        Schema::drop('termsmodifications');
    }
}
