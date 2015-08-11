<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAphdbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aphdbs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inspol_id')->unsigned();
            $table->integer('farm_id')->unsigned();
            $table->double('ins_share')->nullable();
            $table->double('aph')->default(0);
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
        Schema::drop('aphdbs');
    }
}
