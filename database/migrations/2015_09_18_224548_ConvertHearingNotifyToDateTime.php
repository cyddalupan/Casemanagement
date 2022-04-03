<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConvertHearingNotifyToDateTime extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('case_hearing', function($table)
		{
			$table->dropColumn('hearing_notify');
		    $table->dateTime('hearing_notification')->after('hearing_date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('case_hearing', function($table)
		{
		    $table->date('hearing_notify')->after('hearing_date');
		    $table->dropColumn('hearing_notification');
		});
	}

}
