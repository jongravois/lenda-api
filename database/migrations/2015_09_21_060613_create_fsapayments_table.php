<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFsapaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsapayments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id')->unsigned();
            $table->integer('farm_id')->unsigned();
            $table->integer('crop_id')->unsigned();
            $table->string('pgm')->nullable();
            $table->double('base_acres')->default(0);
            $table->double('fsa_yield')->default(0);
            $table->double('amount')->default(0);
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
        Schema::drop('fsapayments');
    }
}
