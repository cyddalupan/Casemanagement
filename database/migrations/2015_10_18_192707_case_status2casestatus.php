<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CaseStatus2casestatus extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('case_files', function($table)
		{
		    $table->renameColumn('case_status_id', 'casestatus_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('case_files', function($table)
		{
		    $table->renameColumn('casestatus_id', 'case_status_id');
		});
	}

}
