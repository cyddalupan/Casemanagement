<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgenciesAddColumnMobile extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('agencies', function($table)
		{
			$table->string('agency_mobile1')->after('agency_name');
			$table->string('agency_mobile2')->after('agency_name');
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
		    $table->dropColumn('agency_mobile1');
		    $table->dropColumn('agency_mobile2');
		});
	}

}
