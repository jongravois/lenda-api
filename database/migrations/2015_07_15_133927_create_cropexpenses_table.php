<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropexpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cropexpenses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->integer('crop_id');
            $table->integer('cat_id');
            $table->integer('loancrop_id');
            $table->string('expense')->nullable();
            $table->double('arm')->default(0);
            $table->double('arm_adj')->default(0);
            $table->double('dist')->default(0);
            $table->double('dist_adj')->default(0);
            $table->double('other')->default(0);
            $table->double('other_adj')->default(0);
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
        Schema::drop('cropexpenses');
    }
}
