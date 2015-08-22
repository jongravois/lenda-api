<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoandiscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loandiscs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id')->unsigned();
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
        Schema::drop('loandiscs');
    }
}
