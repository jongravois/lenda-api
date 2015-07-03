<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_active')->default(1);
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_manager')->default(0);
            $table->boolean('is_approver')->default(0);
            $table->string('name');
            $table->string('nick')->nullable();
            $table->string('email')->unique();
            $table->string('outlook')->nullable();
            $table->string('app')->nullable();
            $table->string('password', 60);
            $table->rememberToken();
            $table->string('phone')->nullable();
            $table->integer('loc_id')->unsigned();
            $table->integer('manager_id')->unsigned()->nullable();
            $table->integer('closer_id')->unsigned()->nullable();
            $table->integer('role_id')->unsigned()->nullable();
            $table->boolean('full_sidebar')->default(1);
            $table->boolean('comms_email')->default(1);
            $table->boolean('comms_sms')->default(0);
            $table->boolean('comms_outlook')->default(0);
            $table->boolean('comms_online')->default(1);
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
        Schema::drop('users');
    }
}
