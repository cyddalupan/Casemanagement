<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AccountTableSeeder extends Seeder {

    public function run()
    {
        DB::table('accounts')->truncate();
		
        DB::table('accounts')->insertGetId([
			'email' => 'clemquinones@gmail.com',
			'name' => 'brittle007',
			'agency_id' => 1,
		]);

        DB::table('accounts')->insertGetId([
			'email' => 'cydmdalupan@gmail.com',
			'name' => 'cyd',
			'agency_id' => 1,
		]);
    }

}
