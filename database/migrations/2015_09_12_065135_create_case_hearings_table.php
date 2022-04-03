<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseHearingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_hearing', function($table)
		{
		    $table->increments('hearing_id');
			$table->date('hearing_added');
			$table->string('hearing_status');
			$table->date('hearing_date');
			$table->date('hearing_notify');
			$table->string('case_hearing_title');
			$table->text('hearing_action');
			$table->text('hearing_remarks');
			$table->integer('case_id');
			$table->string('useradded');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('case_hearing');
	}

}
