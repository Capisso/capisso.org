<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusColumnToSupportTickets extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'tickets',
            function (Blueprint $table) {
                $table->enum('status', array('open', 'resolved', 'follow-up'))->default('open');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'tickets',
            function (Blueprint $table) {
                $table->dropColumn('status');
            }
        );
    }

}