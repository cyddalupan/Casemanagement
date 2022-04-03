<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employers', function($table)
		{
		    $table->increments('employer_id');
			$table->string('employer_name');
			$table->string('employer_mobile1');
			$table->string('employer_mobile2');
			$table->string('employer_country');
			$table->date('employer_date_created');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employers');
	}

}
