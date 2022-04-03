<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeCaseHearing extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('case_hearing', function($table)
		{
		    $table->dropColumn('hearing_added');
		    $table->timestamps();
		    $table->softDeletes();
		    $table->dropColumn('case_id');
		    $table->integer('case_file_id')->after('hearing_id');
		    $table->dropColumn('useradded');
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
		    $table->date('hearing_added');
		    $table->dropColumn('created_at');
		    $table->dropColumn('deleted_at');
		    $table->dropColumn('updated_at');
		    $table->integer('case_id');
		    $table->dropColumn('case_file_id');
		    $table->string('useradded');
		});
	}

}
