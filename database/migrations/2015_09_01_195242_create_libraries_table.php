<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fileclass_id')->unsigned();
            $table->string('title')->nullable();
            $table->string('filename')->nullable();
            $table->integer('version')->nullable();
            $table->text('description')->nullable();
            $table->integer('state_id')->unsigned()->nullable();
            $table->string('path')->nullable();
            $table->integer('doctype_id')->unsigned();
            $table->integer('filetype_id')->unsigned()->nullable();
            $table->integer('distributor_id')->unsigned()->nullable();
            $table->boolean('is_visible')->default(1);
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
        Schema::drop('libraries');
    }
}
