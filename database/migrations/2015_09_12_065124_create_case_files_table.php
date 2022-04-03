<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_file', function($table)
		{
		    $table->increments('case_id');
			$table->date('datecreated');
			$table->string('agency_name');
			$table->date('file_date');
			$table->integer('case_status_id');
			$table->string('file_no');
			$table->string('fname');
			$table->string('mname');
			$table->string('contact_num');
			$table->string('passport');
			$table->date('date_deployed');
			$table->string('country_deployed');
			$table->string('salary');
			$table->string('employer');
			$table->text('complain1');
			$table->string('complain2');
			$table->text('case_remarks');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('case_file');
	}

}
