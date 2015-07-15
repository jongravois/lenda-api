<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultexpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defaultexpenses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('region_id')->default(0);
            $table->integer('location_id');
            $table->integer('crop_id');
            $table->integer('loancrop_id');
            $table->integer('cat_id');
            $table->string('expense')->nullable();
            $table->double('arm')->default(0);
            $table->double('arm_adj')->default(0);
            $table->double('dist')->default(0);
            $table->double('dist_adj')->default(0);
            $table->double('other')->default(0);
            $table->double('other_adj')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('defaultexpenses');
    }
}
