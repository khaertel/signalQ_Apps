<?php

class DashboardsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('dashboards')->truncate();

		$dashboards = array(
			array('type' => 'Main','user_id' => '1'),
			array('type' => 'Sales & Marketing','user_id' => '1'),
			array('type' => 'Network','user_id' => '1'),
			array('type' => 'Finance','user_id' => '1'),
			array('type' => 'Main','user_id' => '2'),
		);

		// Uncomment the below to run the seeder
		DB::table('dashboards')->insert($dashboards);
	}

}
