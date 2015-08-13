<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspols', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id')->unsigned();
            $table->integer('agent_id')->unsigned()->nullable();
            $table->integer('county_id')->unsigned();
            $table->integer('crop_id')->unsigned();
            $table->string('practice')->default('NI');
            $table->boolean('plc')->default(0);
            $table->string('type')->default('RP');
            $table->string('unit')->default('EU');
            $table->string('options')->nullable();
            $table->double('ins_level')->default(0);
            $table->double('ins_share')->default(0);
            $table->integer('planting_days')->default(0);
            $table->double('ins_price')->default(0);
            $table->double('premium')->default(0);
            $table->double('stax_loss_trigger')->default(0);
            $table->double('stax_desired_range')->default(0);
            $table->double('stax_protection_factor')->default(0);
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
        Schema::drop('inspols');
    }
}
