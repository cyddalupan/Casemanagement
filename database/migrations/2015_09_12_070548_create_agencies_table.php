<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agencies', function($table)
		{
		    $table->increments('agency_id');
			$table->string('agency_name');
			$table->string('agency_api_login');
			$table->date('employer_date_created');
			$table->timestamps('employer_last_log');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agencies');
	}

}
