<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->integer('user_id');
            $table->integer('role_id');
            $table->string('committee_role');
            $table->string('vote_status')->default('pending');
            $table->integer('vote')->nullable();
            $table->date('vote_request_date')->nullable();
            $table->date('vote_received_date')->nullable();
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
        Schema::drop('committees');
    }
}
