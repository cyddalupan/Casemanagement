<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CaseFileChangeEmployerToEmployerID extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('case_file', function($table)
		{
			$table->dropColumn('employer');
		    $table->integer('employer_id')->after('salary');
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
			$table->dropColumn('employer_id');
		    $table->string('employer')->after('salary');
		});
	}

}
