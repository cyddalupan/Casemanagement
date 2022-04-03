<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasestatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('casestatus', function($table)
		{
		    $table->increments('status_id');
			$table->string('case_status');
		});

		DB::table('casestatus')->insert(
		    ['case_status' => 'NEW']
		);
		DB::table('casestatus')->insert(
		    ['case_status' => 'FOR FOLLOW UP']
		);
		DB::table('casestatus')->insert(
		    ['case_status' => 'CLOSED']
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('casestatus');
	}

}
