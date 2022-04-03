<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agents', function($table)
		{
		    $table->increments('agent_id');
			$table->string('agent_fname');
			$table->string('agent_lname');
			$table->string('agent_mobile1');
			$table->string('agent_mobile2');
			$table->date('agent_date_created');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agents');
	}

}
