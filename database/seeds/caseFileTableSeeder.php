<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class caseFileTableSeeder extends Seeder {

    public function run()
    {
        DB::table('case_files')->truncate();
		
        DB::table('case_files')->insertGetId([
			'agency_id' => 1,
			'file_date' => '2015-09-12',
			'casestatus_id' => 1,
			'file_no' => '12121',
			'fname' => 'Krystal',
			'lname' => 'Santos',
			'mname' => 'S',
			'contact_num' => '09335844995',
			'passport' => 'EB4485218712',
			'country_deployed' => 'QATAR',
			'employer_id' => 1,
			'salary' => '400 USD',
			'complain' => '["with medical condition","poor working condition"]',
			'case_remarks' => 'test remarks',
			'agent_id' => 1,
		]);
			
        DB::table('case_files')->insertGetId([
			'agency_id' => 1,
			'file_date' => '2015-09-12',
			'casestatus_id' => 1,
			'file_no' => '12121',
			'fname' => 'Fatima',
			'lname' => 'Bautista',
			'mname' => '',
			'contact_num' => '565675765756',
			'passport' => 'EB6218054',
			'country_deployed' => 'QATAR',
			'employer_id' => 1,
			'salary' => '400 USD',
			'complain' => '["maltreatment / abuse and exploitation","end of contact"]',
			'case_remarks' => 'test remarks',
			'agent_id' => 1,
		]);
		
		
		 DB::table('case_files')->insertGetId([
			'agency_id' => 1,
			'file_date' => '2015-09-12',
			'casestatus_id' => 1,
			'file_no' => '12121',
			'fname' => 'Nestor',
			'lname' => 'Gubaton',
			'mname' => '',
			'contact_num' => '565675765756',
			'passport' => 'EB6218054',
			'country_deployed' => 'QATAR',
			'employer_id' => 1,
			'salary' => '400 USD',
			'complain' => '["maltreatment / abuse and exploitation","end of contact"]',
			'case_remarks' => 'test remarks',
			'agent_id' => 2,
		]);

		 DB::table('case_files')->insertGetId([
			'agency_id' => 1,
			'file_date' => '2015-09-12',
			'casestatus_id' => 1,
			'file_no' => '12121',
			'fname' => 'adonis',
			'lname' => 'canete',
			'mname' => '',
			'contact_num' => '565675765756',
			'passport' => 'EB6218054',
			'country_deployed' => 'QATAR',
			'employer_id' => 1,
			'salary' => '400 USD',
			'complain' => '["maltreatment / abuse and exploitation","end of contact"]',
			'case_remarks' => 'test remarks',
			'agent_id' => 2,
		]);

		 DB::table('case_files')->insertGetId([
			'agency_id' => 1,
			'file_date' => '2015-09-12',
			'casestatus_id' => 1,
			'file_no' => '12121',
			'fname' => 'RODEL',
			'lname' => 'BALIWAG',
			'mname' => '',
			'contact_num' => '565675765756',
			'passport' => 'EB6218054',
			'country_deployed' => 'QATAR',
			'employer_id' => 1,
			'salary' => '400 USD',
			'complain' => '["maltreatment / abuse and exploitation","end of contact"]',
			'case_remarks' => 'test remarks',
			'agent_id' => 2,
		]);

		 DB::table('case_files')->insertGetId([
			'agency_id' => 1,
			'file_date' => '2015-09-12',
			'casestatus_id' => 1,
			'file_no' => '12121',
			'fname' => 'jordan',
			'lname' => 'ursua',
			'mname' => '',
			'contact_num' => '565675765756',
			'passport' => 'EB6218054',
			'country_deployed' => 'QATAR',
			'employer_id' => 1,
			'salary' => '400 USD',
			'complain' => '["maltreatment / abuse and exploitation","end of contact"]',
			'case_remarks' => 'test remarks',
			'agent_id' => 2,
		]);		 

		 DB::table('case_files')->insertGetId([
			'agency_id' => 1,
			'file_date' => '2015-09-12',
			'casestatus_id' => 1,
			'file_no' => '12121',
			'fname' => 'maximo',
			'lname' => 'ladaig',
			'mname' => '',
			'contact_num' => '565675765756',
			'passport' => 'EB6218054',
			'country_deployed' => 'QATAR',
			'employer_id' => 1,
			'salary' => '400 USD',
			'complain' => '["maltreatment / abuse and exploitation","end of contact"]',
			'case_remarks' => 'test remarks',
			'agent_id' => 2,
		]);				

		 DB::table('case_files')->insertGetId([
			'agency_id' => 1,
			'file_date' => '2015-09-12',
			'casestatus_id' => 1,
			'file_no' => '12121',
			'fname' => 'vincent',
			'lname' => 'lampao',
			'mname' => '',
			'contact_num' => '565675765756',
			'passport' => 'EB6218054',
			'country_deployed' => 'QATAR',
			'employer_id' => 1,
			'salary' => '400 USD',
			'complain' => '["maltreatment / abuse and exploitation","end of contact"]',
			'case_remarks' => 'test remarks',
			'agent_id' => 2,
		]);

		 for ($case_file_number=0; $case_file_number < 300; $case_file_number++) { 
		 	DB::table('case_files')->insert([
				'agency_id' => 2,
				'file_date' => rand(1990,date('Y')).'-'.rand(1,12).'-'.rand(1,28),
				'casestatus_id' => 1,
				'file_no' => rand(1111,9999),
				'fname' => str_random(10),
				'lname' => str_random(10),
				'mname' => str_random(5),
				'contact_num' => rand(111111111,999999999),
				'passport' => str_random(10),
				'country_deployed' => str_random(10),
				'employer_id' => rand(1,5),
				'salary' => rand(1,999).' USD',
				'complain' => json_encode(array(str_random(25))),
				'case_remarks' => str_random(10),
				'agent_id' => rand(1,2),
			]);
		}

		$hitcount = 0;
		for ($case_file_number=300; $case_file_number < 320; $case_file_number++) { 
		 	$hitcount++;
		 	DB::table('case_files')->insert([
				'agency_id' => 2,
				'file_date' => rand(1990,date('Y')).'-'.rand(1,12).'-'.rand(1,28),
				'casestatus_id' => 1,
				'file_no' => rand(1111,9999),
				'fname' => 'first_hit'.$hitcount,
				'mname' => 'middle_'.$hitcount,
				'lname' => 'last_'.$hitcount,
				'contact_num' => rand(111111111,999999999),
				'passport' => str_random(10),
				'country_deployed' => str_random(10),
				'employer_id' => rand(1,5),
				'salary' => rand(1,999).' USD',
				'complain' => json_encode(array(str_random(25))),
				'case_remarks' => str_random(10),
				'agent_id' => rand(1,2),
			]);
		}
		
    }

}
