<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CleanCasestatusID extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casestatuses', function($table)
		{
		    $table->renameColumn('status_id', 'id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casestatuses', function($table)
		{
		    $table->renameColumn('id', 'status_id');
		});
	}

}
