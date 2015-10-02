<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->boolean('is_required')->default(true);
            $table->string('status')->default('pending');
            $table->string('title');
            $table->string('filename')->nullable();
            $table->string('path')->nullable();
            $table->string('filetype')->nullable();
            $table->string('original_filename')->nullable();
            $table->text('description')->nullable();
            $table->date('date_requested')->nullable();
            $table->date('date_received')->nullable();
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
        Schema::drop('attachments');
    }
}
