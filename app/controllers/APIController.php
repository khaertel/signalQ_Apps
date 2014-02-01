<?php

class APIController extends BaseController {

	public function getConfig() {

		//check if we have a user with the request's remote IP
		if ($this->getUser()) {
			//convert to Array and include remote IP
			$user = $this->getUser()->toArray(); 
			$user['ip'] = $this->getRemoteIP();
			return Response::json($user);
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
		
				//simplify				
				foreach ($metricInstances as $instance) {
					$response[] = array('id' => $instance->id, 'class' => $instance->class, 'parameter' => $instance->parameters);
				}  
            }
			else {
				$response['error'] = 'Required parameters missing';
			}
        }
        else {
	        $response['error'] = 'Customer ID is required';
        }
		return Response::json($response);
	}
	
	public function postValue(MetricInstance $metricInstance) {

		//check if user is valid (via remote IP)
		$user = $this->getUser(); 
		
		if($user->id) {
			//get POST data
			$value = Input::get('value');
				
			//get widgt number
			if($metricInstance->id) {

				//save data in signalQ DB			
				//if(!array_key_exists('timestamp', $value)) {
					//this means this is a widget with only a single value
							
					//create timestamp in customer's timezone
					//$original_tz =  date_default_timezone_get(); 
					//date_default_timezone_set($user->system_timezone); 
					//$timestamp = date("Y-m-d H:i:s");
					//date_default_timezone_set($original_tz); 
					
					$data = new WidgetData();
					$data->value = $value;
					
					//attaching/saving the new data object
					$data = $metricInstance->widgetData()->save($data);
					
					$response = array('id' => $data->id, 'value' => $value);
																
					//$sql = 'INSERT INTO Widget_Data(slot_id, timestamp, value) VALUES (:slot, :timestamp, :value)';
					//$params = array('slot' => $nbWidget, 'timestamp' => $timestamp, 'value' => json_encode($data['value']));	
				//}
				//else {
					//this means this widget can have a multiple values with differnet timestamps
					//$sql = 'INSERT INTO Widget_Data(slot_id, timestamp, value) VALUES (:slot, :timestamp, :value)';
					//$params = array('slot' => $nbWidget, 'timestamp' => date("Y-m-d H:i:s",$data['timestamp']), 'value' => json_encode($data['value']));
				//}
			
				//DB::insert($sql, $params);	
		    	//$response['error'] = $e->getMessage();
			}
			else {
				$response['error'] = 'No widget number specified'; 
			}
		}
		else {
			$response['error'] = 'No valid user with this remote IP';
		}		
		return Response::json($response);		
	}
		
	public function getUser() {
		//get user collection by IP
		$users = User::where('runtime_ip','=', $this->getRemoteIP())->remember(60)->get();
		
		//check if we have a match
		if ($users->contains(1)) {
			return $users->first();
		} else {
			return false;
		}
	}	
			
	public function getRemoteIP() {
		//get remote address
		$remote = Request::server('REMOTE_ADDR');
		//local testing
		if ($remote == '127.0.0.1' || $remote == '64.46.26.123') {
			$remote = '193.28.87.211';
		}
		
		return $remote;
	}	
		
}
