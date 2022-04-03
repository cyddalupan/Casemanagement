<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CaseFileChangeAgencyNameToAgencyID extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('case_file', function($table)
		{
			$table->dropColumn('agency_name');
		    $table->integer('agency_id')->after('agent_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('case_file', function($table)
		{
			$table->dropColumn('agency_id');
		    $table->string('agency_name')->after('agent_id');
		});
	}

}
