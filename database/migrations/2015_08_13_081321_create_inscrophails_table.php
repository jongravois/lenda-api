<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscrophailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscrophails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id')->unsigned();
            $table->integer('crop_id')->unsigned();
            $table->integer('county_id')->unsigned();
            $table->integer('inspols_id')->unsigned();
            $table->double('amount')->default(0);
            $table->double('premium')->default(0);
            $table->double('ins_share')->default(100);
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
        Schema::drop('inscrophails');
    }
}
