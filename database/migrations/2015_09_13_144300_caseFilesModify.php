<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CaseFilesModify extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('case_file', function($table)
		{
		    $table->dropColumn('complain1');
		    $table->dropColumn('complain2');
		    $table->text('complain')->after('employer');
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
		    $table->string('complain1')->after('employer');
		    $table->string('complain2')->after('employer');
		    $table->dropColumn('complain');
		});
	}

}
