<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class employerTableSeeder extends Seeder {

    public function run()
    {
        DB::table('employers')->truncate();
		
        DB::table('employers')->insertGetId([
			'agency_id' => 1,
			'employer_name' => 'AGENSI PEKERJAAN JENNI SDN BHD',
			'employer_mobile1' => '89887788787',
			'employer_mobile2' => '343442',
			'employer_country' => 'QATAR',
			'employer_date_created' => '2015-09-12'
		]);
			
        DB::table('employers')->insertGetId([
			'agency_id' => 1,
			'employer_name' => 'AL BASHA',
			'employer_mobile1' => '2323424',
			'employer_mobile2' => '',
			'employer_country' => 'QATAR',
			'employer_date_created' => '2015-09-12'
		]);
		
        DB::table('employers')->insertGetId([
			'agency_id' => 1,
			'employer_name' => 'AL KHAZAR FISHERIES FACTORY',
			'employer_mobile1' => '65756757',
			'employer_mobile2' => '',
			'employer_country' => 'TAIWAN',
			'employer_date_created' => '2015-09-12'
		]);
    }

}
