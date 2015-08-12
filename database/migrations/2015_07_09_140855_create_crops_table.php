<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('crop');
            $table->string('name');
            $table->integer('sort_order');
            $table->double('tea');
            $table->double('arm_default_price');
            $table->double('arm_default_ins_price');
            $table->string('measurement')->default('bu');
            $table->string('rebate_measurement')->default('bu');
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
        Schema::drop('crops');
    }
}
