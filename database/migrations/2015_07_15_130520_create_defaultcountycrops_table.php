<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultcountycropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defaultcountycrops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('county_id');
            $table->double('price_corn')->default(4.20);
            $table->double('ins_price_corn')->default(4.25);
            $table->double('yield_corn_irr')->default(139.00);
            $table->double('yield_corn_ni')->default(94.00);
            $table->double('price_soybeans')->default(10.00);
            $table->double('ins_price_soybeans')->default(11.25);
            $table->double('yield_soybeans_irr')->default(31.00);
            $table->double('yield_soybeans_ni')->default(25.00);
            $table->double('price_soybeansfac')->default(10.00);
            $table->double('ins_price_soybeansfac')->default(11.25);
            $table->double('yield_soybeansfac_irr')->default(23.00);
            $table->double('yield_soybeansfac_ni')->default(18.00);
            $table->double('price_sorghum')->default(4.00);
            $table->double('ins_price_sorghum')->default(4.00);
            $table->double('yield_sorghum_irr')->default(55.00);
            $table->double('yield_sorghum_ni')->default(55.00);
            $table->double('price_wheat')->default(5.75);
            $table->double('ins_price_wheat')->default(6.64);
            $table->double('yield_wheat_irr')->default(46.00);
            $table->double('yield_wheat_ni')->default(46.00);
            $table->double('price_cotton')->default(90.00);
            $table->double('ins_price_cotton')->default(93.00);
            $table->double('yield_cotton_irr')->default(649.00);
            $table->double('yield_cotton_ni')->default(467.00);
            $table->double('price_rice')->default(0.135);
            $table->double('ins_price_rice')->default(0.14);
            $table->double('yield_rice_irr')->default(5820.00);
            $table->double('yield_rice_ni')->default(5820.00);
            $table->double('price_peanuts')->default(2.30);
            $table->double('ins_price_peanuts')->default(2.80);
            $table->double('yield_peanuts_irr')->default(3000.00);
            $table->double('yield_peanuts_ni')->default(3000.00);
            $table->double('price_sugarcane')->default(0.28);
            $table->double('ins_price_sugarcane')->default(0.16);
            $table->double('yield_sugarcane_irr')->default(5133.00);
            $table->double('yield_sugarcane_ni')->default(5133.00);
            $table->double('price_sunflowers')->default(0.80);
            $table->double('ins_price_sunflowers')->default(0.80);
            $table->double('yield_sunflowers_irr')->default(2000);
            $table->double('yield_sunflowers_ni')->default(2000);
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
        Schema::drop('defaultcountycrops');
    }
}
