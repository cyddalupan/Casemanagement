<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

include 'agenciesTableSeeder.php';
include 'agentsTableSeeder.php';
include 'caseFileTableSeeder.php';
include 'employerTableSeeder.php';
include 'complaintsTableSeeder.php';
include 'AccountTableSeeder.php';
include 'CaseHearingSeeder.php';


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('agenciesTableSeeder');
		// $this->call('agentsTableSeeder');
		// $this->call('caseFileTableSeeder');
		// $this->call('employerTableSeeder');
		// $this->call('complaintsTableSeeder');
		// $this->call('AccountTableSeeder');
		 $this->call('CaseHearingSeeder');
	}

}
