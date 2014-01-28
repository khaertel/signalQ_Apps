<?php

class WidgetController extends BaseController {

	/**
	 * User Model
	 * @var User
	 */
	protected $user;

	/**
	 * MetricInstance Model
	 * @var Metric
	 */
	protected $metricInstance;

	/**
	 * Inject the models.
	 * @param User $user
	 * @param Role $role
	 * @param Permission $permission
	 */
	public function __construct(User $user, MetricInstance $metricInstance)
	{
	    parent::__construct();
	    $this->user = $user;
	    $this->metricInstance = $metricInstance;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getUserDashboard()
	{
		//get the user's dashboard ids
		$dashboards = Dashboard::where('user_id','=', Auth::user()->id)->get();
				
	    return View::make('site.dashboard')->with('dashboards', $dashboards);
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param $instance
     * @return Response
     */
    public function getEdit($winstance)
    {
        if ( $winstance->id )
        {
            $metricInstances = $this->metricInstance->all();
			
            // Title
        	$title = 'Edit Widget Instance';
        	// mode
        	$mode = 'edit';

        	return View::make('site/widgets/edit_activate', compact('winstance', 'metricInstances', 'title', 'mode'));
        }
        else
        {
            return Redirect::to('site/widgets')->with('error', 'Widget instance does not exist.');
        }
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getCatalogue()
	{
		//get the user's dashboard ids
		$dashboardIds = Dashboard::getAllDashboards(Auth::user()->id);
		
		Log::info('dashboardIds:'. json_encode($dashboardIds));
				
		//get the user's active widget instance Ids
		$instanceIds = WidgetInstance::getWidgetIds($dashboardIds);
		
		Log::info('instanceIds:'. json_encode($instanceIds));
		
		//only show widgets in catalogue that the user has not activated yet
		$widgets = Widget::getUnactivated($instanceIds);
		
        return View::make('site.widgets', compact('dashboards','widgets'));
	}

	/**
	 * Activates chosen widgets (by creating a widget instance)
	 *
	 * @return Response
	 */
	public function postActivate() 
	{
	
		//ids of chosen widgets
		$chosenInstances = Input::get('widgets');	
		
		Log::info('Chosen:' . json_encode($chosenInstances));
		
		//get logged in user
		$user = User::find(Auth::user()->id);
		
		//dashboard object 'main' of customer
		$dashboard = $user->dashboards()->where('type', '=', 'Main')->first();
		
		//default parameters for new widget instance
		$params = array(
				'active' => 0, 
				'alert_type' => NULL,
		);
			
		//insert create widget instances for customer
		foreach ($chosenInstances as $instance => $checked) {

			//get widget
			$widget = Widget::find($instance);

			Log::info('Attaching:'.$instance.' name '.$widget->name . $dashboard->id);

			//get Widget's metrics
			$metrics = $widget->metrics;
			
			//inserts a new widgetInstance (dashboard_widget)
			$dashboard->widgets()->attach($instance, array('name' => $widget->name, 'clone' => 0));

			//create new widget 'master' instance
			$widgetInstance = WidgetInstance::where('dashboard_id', '=', $dashboard->id)
											->where('widget_id', '=', $instance)
											->where('clone', '=', 0)->first();
			
			Log::info('WI'.$widgetInstance);
			
			//cycle through metrics and create an instance
			foreach ($metrics as $metric) {
				//create instance
				$metricInstance = new MetricInstance();
				//populate the instance based on the metric
				$metricInstance = $metricInstance->populate($metric);
				
				$metricInstance = $widgetInstance->metricInstances()->save($metricInstance);
			}
			
			
		}	
	}
}
