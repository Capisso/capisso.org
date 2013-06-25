<?php

use Illuminate\Database\Migrations\Migration;

class CreateSupportTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tickets', function($table) {
            $table->increments('id');

            $table->string('title');
            $table->text('body');
            $table->integer('user_id')->unsigned();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('ticket_responses', function($table) {
            $table->increments('id');

            $table->text('body');
            $table->integer('ticket_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('ticket_id')->references('id')->on('tickets');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tickets');
		Schema::drop('ticket_responses');
	}

}