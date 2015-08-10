<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriorliensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priorliens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->string('lien_holder');
            $table->string('city_state');
            $table->string('contact');
            $table->string('phone');
            $table->string('email');
            $table->double('projected_crops')->default(0);
            $table->double('fsa_payments')->default(0);
            $table->double('ins_over_discount')->default(0);
            $table->double('nonrp_discount')->default(0);
            $table->double('supplemental_coverage')->default(0);
            $table->double('claims')->default(0);
            $table->double('equipment')->default(0);
            $table->double('realestate')->default(0);
            $table->double('other')->default(0);
            $table->double('total')->default(0);
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
        Schema::drop('priorliens');
    }
}
