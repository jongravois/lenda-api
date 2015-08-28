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
            $table->enum('type', ['crop', 'equipment', 'fsa', 'realestate', 'other'])->default('other');
            $table->string('lien_holder');
            $table->string('city_state');
            $table->string('contact');
            $table->string('phone');
            $table->string('email');
            $table->string('description');
            $table->double('lien_amount')->default(0);
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
