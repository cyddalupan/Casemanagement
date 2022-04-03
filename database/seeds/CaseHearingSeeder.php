<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CaseHearingSeeder extends Seeder {

    public function run()
    {
        DB::table('case_hearings')->truncate();
		
        $hearingstatus = ['FOR HEARING','FOR FOLLOW UP','CLOSED'];

		for ($seedloop=1; $seedloop < 300; $seedloop++) { 
	        DB::table('case_hearings')->insertGetId([
				'case_file_id' => rand(300,320),
				'hearing_status' => $hearingstatus[rand(0,2)],
				'hearing_date' => date('Y-m-d', time()+60*60*24*rand(1,20)),
				'hearing_notification' => date('Y-m-d', time()+60*60*23*rand(1,20)),
				'case_hearing_title' => str_random(15),
				'hearing_action' => str_random(10),
				'hearing_remarks' => str_random(25),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			]);
	    }
    }

}
