<?php

class APIController extends BaseController {

	public function getConfig() {
		//get remote address
		$remote = Request::server('REMOTE_ADDR');
		//local testing
		if ($remote == '127.0.0.1' || $remote == '64.46.26.123') {
			$remote = '193.28.87.211';
		}
		
		//look up configuration
		$user = User::where('runtime_ip','=', $remote)->get()->toArray();	
		//check for valid key
		if (array_key_exists(0, $user)) { 
			$user[0]['ip'] = $remote;
			return Response::json($user[0]);
		} else {
			return Response::json(array());
		}
		
	}
	
	public function getMetricInstances(User $user, $updates = NULL) 
	{	  
		Log::info('Getting metrics for user: '.$user->id);
		$response = array();
		
		if($user->id) {
			if (isset($updates)) {

				$metricInstances = DB::select( DB::raw("SELECT DISTINCT MI.id, class, parameters 
										FROM 
											metricInstances MI
										JOIN
											widgetInstances WI ON MI.widgetInstance_id = WI.id 
										JOIN
											widgets ON WI.widget_id = widgets.id
										JOIN dashboards D ON D.id = WI.dashboard_id
										WHERE MI.updates = :update
										AND D.user_id = :uId"), 
									array(
				   						'update' => $updates,
				   						'uId'	=> $user->id,
				 					));	
		
//				$metricInstances = MetricInstance::with(array(
//						'WidgetInstance.Widget', 
//						'WidgetInstance.Dashboard' => function($query) use ($user)
//						{	
//							$query->where('user_id','=', $user->id);
//						}))
//						->where('updates', '=', $updates)->get()->toArray();
				
				//print_r($metricInstances);
				//simplify				
				foreach ($metricInstances as $instance) {
					$response[] = array('id' => $instance->id, 'class' => $instance->class, 'parameter' => $instance->parameters);
				}  

				//print_r($results);
        	
            }
			else {
				$response['error'] = 'Required parameters missing';
			}
        }
        else {
	        $response['error'] = 'Customer ID is required';
        }
		return json_encode($response);
	}
}
