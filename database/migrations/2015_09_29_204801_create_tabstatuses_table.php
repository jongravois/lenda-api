<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabstatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabstatuses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id')->unsigned();
            $table->boolean('summary')->default(false);
            $table->boolean('underwriting')->default(false);
            $table->boolean('terms')->default(false);
            $table->boolean('committee')->default(false);
            $table->boolean('comments')->default(false);
            $table->boolean('applicant')->default(false);
            $table->boolean('quests')->default(false);
            $table->boolean('references')->default(false);
            $table->boolean('financials')->default(false);
            $table->boolean('crops')->default(false);
            $table->boolean('farms')->default(false);
            $table->boolean('fsa')->default(false);
            $table->boolean('insurance')->default(false);
            $table->boolean('budget')->default(false);
            $table->boolean('collateral')->default(false);
            $table->boolean('prereqs')->default(false);
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
        Schema::drop('tabstatuses');
    }
}
