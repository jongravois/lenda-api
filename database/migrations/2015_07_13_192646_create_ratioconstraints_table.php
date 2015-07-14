<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatioconstraintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratioconstraints', function (Blueprint $table) {
            $table->increments('id');
            $table->string('constraint');
            $table->double('gradeA');
            $table->double('gradeB');
            $table->double('gradeC');
            $table->double('gradeD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ratioconstraints');
    }
}
