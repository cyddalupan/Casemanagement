<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CaseHearingHearingId2Id extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('case_hearings', function($table)
		{
		    $table->renameColumn('hearing_id', 'id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('case_hearings', function($table)
		{
		    $table->renameColumn('id', 'hearing_id');
		});
	}

}
