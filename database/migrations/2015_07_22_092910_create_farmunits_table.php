<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmunitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmunits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unit_type')->default('EU');
            $table->integer('farm_id')->unsigned();
            $table->integer('county_id')->unsigned();
            $table->string('owner')->nullable();
            $table->double('share_rent')->default(0);
            $table->boolean('perm_to_insure')->default(0);
            $table->double('IR')->default(0);
            $table->double('NI')->default(0);
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
        Schema::drop('farmunits');
    }
}
