<?php

class DatabaseSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();

        // Add calls to Seeders here
        
        //Basic
        $this->call('UsersTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('PermissionsTableSeeder');
		
		//Business Data
		$this->call('MetricsTableSeeder');
    	$this->call('WidgetsTableSeeder');
		$this->call('DashboardsTableSeeder');
		$this->call('MetricsWidgetsTableSeeder');
	}

}