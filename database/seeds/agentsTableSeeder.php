<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class agentsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('agents')->truncate();

        DB::table('agents')->insertGetId([
			'agency_id' => 1,
			'agent_fname' => 'ANA LEA',
			'agent_lname' => 'MACAILING',
			'agent_mobile1' => '6567657575',
			'agent_mobile2' => '',
		]);	
		
        DB::table('agents')->insertGetId([
			'agency_id' => 1,
			'agent_fname' => 'ANALIZA',
			'agent_lname' => 'MALAILING',
			'agent_mobile1' => '98887987',
			'agent_mobile2' => '',
		]);
			
        DB::table('agents')->insertGetId([
			'agency_id' => 1,
			'agent_fname' => 'ANDREA',
			'agent_lname' => 'SAPOSO',
			'agent_mobile1' => '6575775',
			'agent_mobile2' => '',
		]);
    }

}
