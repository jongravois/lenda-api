<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentstatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentstatuses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->integer('comment_id');
            $table->integer('user_id');
            $table->integer('recipient_id');
            $table->string('status');
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
        Schema::drop('commentstatuses');
    }
}
