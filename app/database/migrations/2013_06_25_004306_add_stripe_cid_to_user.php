<?php

use Illuminate\Database\Migrations\Migration;

class AddStripeCidToUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table) {

            $table->integer('stripe_customer_id');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('users', function($table) {

            $table->dropColumn('stripe_customer_id');

        });
	}

}