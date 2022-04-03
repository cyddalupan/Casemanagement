<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class agenciesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('agencies')->truncate();

        DB::table('agencies')->insertGetId([
				'agency_name' => 'BENCHSTONE ENTERPRISES, INC',
				'agency_mobile1' => '09335844995',
				'agency_mobile2' => '',
				'agency_api_login' => '',
				'employer_date_created' => '2015-09-12'
		]);	
		
        DB::table('agencies')->insertGetId([
				'agency_name' => 'STEP UP INTERNATIONAL MANPOWER SERVICES',
				'agency_api_login' => '',
				'agency_mobile1' => '',
				'agency_mobile2' => '',
				'employer_date_created' => '2015-09-12'
		]);
			
        DB::table('agencies')->insertGetId([
				'agency_name' => 'Alpha Tomo Manpower (P)',
				'agency_api_login' => '',
				'agency_mobile1' => '',
				'agency_mobile2' => '',
				'employer_date_created' => '2015-09-12'
		]);
    }

}
