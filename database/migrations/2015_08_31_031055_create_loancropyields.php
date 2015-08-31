<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoancropyields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loancropyields', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('loancrop_id')->unsigned();
            $table->double('p1')->nullable();
            $table->double('p2')->nullable();
            $table->double('p3')->nullable();
            $table->double('p4')->nullable();
            $table->double('p5')->nullable();
            $table->double('p6')->nullable();
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
        Schema::drop('loancropyields');
    }
}
