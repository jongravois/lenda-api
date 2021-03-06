<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanpracticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanpractices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crop_year')->default(2015);
            $table->integer('loan_id')->unsigned();
            $table->integer('farm_id')->unsigned();
            $table->integer('farmunit_id')->unsigned();
            $table->integer('crop_id')->unsigned();
            $table->integer('loancrop_id')->unsigned();
            $table->string('practice')->default('IR');
            $table->boolean('is_active')->default(1);
            $table->boolean('plc')->default(1);
            $table->double('aph')->default(0);
            $table->double('ins_price')->nullable();
            $table->double('ins_share')->default(100);
            $table->double('ins_premium')->default(0);
            $table->string('ins_type')->default('RP');
            $table->string('ins_option')->default('SE');
            $table->string('ins_unit')->default('EU');
            $table->double('ins_level')->default(75);
            $table->double('acres')->default(0);
            $table->double('prod_price')->default(0);
            $table->double('prod_share')->nullable();
            $table->double('prod_yield')->default(100);
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
        Schema::drop('loanpractices');
    }
}
