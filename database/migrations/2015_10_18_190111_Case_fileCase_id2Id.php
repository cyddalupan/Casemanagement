<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CaseFileCaseId2Id extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('case_file', function($table)
		{
		    $table->renameColumn('case_id', 'id');
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
		    $table->renameColumn('id', 'case_id');
		});
	}

}
