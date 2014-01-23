<?php

class MetricsWidgetsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('metric_widget')->delete();

		for ($i=1; $i <=25;$i++) {
			$widget = Widget::find($i);
			$widget->metrics()->attach($i);
		}			
	
		$widget = Widget::find(26);
		$widget->metrics()->attach(30);		
		
		$metric = Metric::find(26);
		$metric->widgets()->attach(6);
					
		$metric = Metric::find(27);
		$metric->widgets()->attach(9);

		$metric = Metric::find(28);
		$metric->widgets()->attach(10);
				
		$metric = Metric::find(29);
		$metric->widgets()->attach(10);
		
		$metric = Metric::find(31);
		$metric->widgets()->attach(13);
		
    }

}
