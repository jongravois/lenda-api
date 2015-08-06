<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id')->unsigned();
            $table->string('fsn')->nullable();
            $table->integer('county_id')->unsigned();
            $table->string('owner')->nullable();
            $table->double('share_rent')->default(0);
            $table->double('cash_rent')->default(0);
            $table->double('waived')->default(0);
            $table->string('when_due')->nullable();
            $table->double('IR')->default(0);
            $table->double('NI')->default(0);
            $table->boolean('perm_to_insure')->default(0);
            $table->double('fsa_paid')->default(0);
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
        Schema::drop('farms');
    }
}
