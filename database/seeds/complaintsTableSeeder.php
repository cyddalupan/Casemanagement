<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class complaintsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('complaints')->truncate();

        DB::table('complaints')->insertGetId([
				'complaint_name' => 'non-payment of salaries,overwork or no rest day'
		]);	
		
         DB::table('complaints')->insertGetId([
				'complaint_name' => 'with medical condition'
		]);	
		
		 DB::table('complaints')->insertGetId([
				'complaint_name' => 'prevented from  returning home despite,delay in payment of salaries'
		]);	
		
		 DB::table('complaints')->insertGetId([
				'complaint_name' => 'poor working condition'
		]);	
		
		
		 DB::table('complaints')->insertGetId([
				'complaint_name' => 'maltreatment / abuse and exploitation'
		]);	
		
		
		 DB::table('complaints')->insertGetId([
				'complaint_name' => 'end of contact'
		]);	
	
		
		
    }

}
