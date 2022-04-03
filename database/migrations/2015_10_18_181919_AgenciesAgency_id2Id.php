<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgenciesAgencyId2Id extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('agencies', function($table)
		{
		    $table->renameColumn('agency_id', 'id');
		    $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('agencies', function($table)
		{
		    $table->renameColumn('id', 'agency_id');
		    $table->dropColumn('deleted_at');
		});
	}

}
