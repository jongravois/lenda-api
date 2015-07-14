<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOthercollateralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('othercollaterals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->enum('type', ['equipment', 'fsa', 'realestate', 'other'])->default('other');
            $table->string('source');
            $table->text('description')->nullable();
            $table->double('mkt_value')->default(0);
            $table->double('prior_lien')->default(0);
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
        Schema::drop('othercollaterals');
    }
}
