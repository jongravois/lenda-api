<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrerequisitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prerequisites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->string('document');
            $table->boolean('is_required')->default(true);
            $table->string('title');
            $table->boolean('received')->default(0);
            $table->date('date_requested')->nullable();
            $table->date('date_received')->nullable();
            $table->string('path')->nullable();
            $table->string('filename')->nullable();
            $table->string('reason_pending')->nullable();
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
        Schema::drop('prerequisites');
    }
}
