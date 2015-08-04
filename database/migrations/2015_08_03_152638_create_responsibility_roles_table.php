<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsibilityRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsibility_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('responsibility_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->string('level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('responsibility_roles');
    }
}
