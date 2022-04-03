<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAgents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('agents', function($table)
		{
		    $table->renameColumn('agent_id', 'id');
		    $table->renameColumn('agent_date_created', 'created_at');
		    $table->timestamp('updated_at');
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
		Schema::table('agents', function($table)
		{
		    $table->renameColumn('id', 'agent_id');
		    $table->renameColumn('created_at', 'agent_date_created');
		    $table->dropColumn('updated_at');
		    $table->dropColumn('deleted_at');
		});
	}

}
