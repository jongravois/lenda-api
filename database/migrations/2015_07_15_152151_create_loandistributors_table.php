<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoandistributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loandistributors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->integer('distributor_id');
            $table->string('contact');
            $table->string('phone');
            $table->string('email');
            $table->double('dist_balance')->default(0);
            $table->double('dist_remaining')->default(0);
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
        Schema::drop('loandistributors');
    }
}
