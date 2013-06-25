<?php

use Illuminate\Database\Migrations\Migration;

class LicenseKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('licenses', function($table) {
            $table->increments('id');

            $table->string('domain')->unique();
            $table->integer('user_id')->unsigned();
            $table->boolean('panel')->default(true);
            $table->integer('nodes')->default(0);
            $table->boolean('active');
            $table->date('last_renewal_date')->nullable();
            $table->date('termination_date')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('licenses');
	}

}