<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQbtransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qbtrans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaction_id')->unsigned();
            $table->integer('loan_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->dateTime('qb_date');
            $table->string('qb_type');
            $table->integer('cat_id')->unsigned();
            $table->string('qb_description');
            $table->double('qb_amount');
            $table->double('qb_cat_balance');
            $table->double('qb_total_budget');
            $table->double('qb_total_spent');
            $table->enum('qb_trans_status', ['approved','completed', 'confirmed','rejected', 'pending']);
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
        Schema::drop('qbtrans');
    }
}
