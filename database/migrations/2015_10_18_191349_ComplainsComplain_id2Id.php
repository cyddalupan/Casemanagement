<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComplainsComplainId2Id extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('complaints', function($table)
		{
		    $table->renameColumn('complaint_id', 'id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('complaints', function($table)
		{
		    $table->renameColumn('id', 'complaint_id');
		});
	}

}
