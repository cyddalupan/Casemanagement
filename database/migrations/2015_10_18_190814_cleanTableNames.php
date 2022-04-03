<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CleanTableNames extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::rename('casestatus', 'casestatuses');
		Schema::rename('case_hearing', 'case_hearings');
		Schema::rename('case_file', 'case_files');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::rename('casestatuses', 'casestatus');
		Schema::rename('case_hearings', 'case_hearing');
		Schema::rename('case_files', 'case_file');
	}

}
