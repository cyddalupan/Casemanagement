<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CaseFileTimeStamp extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('case_file', function($table)
		{
		    $table->timestamps();
		    $table->softDeletes();
		    $table->dropColumn('datecreated');
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
		    $table->dropColumn('created_at');
		    $table->dropColumn('updated_at');
		    $table->dropColumn('deleted_at');
		});
	}

}
