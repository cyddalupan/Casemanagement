<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CaseFileaddLnameTostring extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('case_file', function($table)
		{
		    $table->string('lname')->after('mname');
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
			$table->dropColumn('lname');
		});
	}

}
