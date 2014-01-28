<?php

use Robbo\Presenter\PresentableInterface;

class WidgetInstance extends Eloquent implements Presentable {
	protected $guarded = array();
	protected $table = 'widgetInstances';

	public static $rules = array();
	
	//Relationships
	public function metricInstances() {
		return $this->hasMany('metricInstance', 'widgetInstance_id');
	}
	
	public function dashboard() {
		return $this->belongsTo('Dashboard');
	}

	public function widget() {
		return $this->belongsTo('Widget');
	}

	public function getPresenter()
	{
	    return new WidgetInstancePresenter($this);
	}
	
	/**
	 * Returns user's active widget instances's ids only.
	 * @return array|bool
	 */
	public static function getActiveWidgets($dashboards) {
		$widgets = array();
		//check all dashboards
		foreach ($dashboards as $dashboard) {
			//get all widgets for dashboard
			$widgets[] = Dashboard::find($dashboard->id)->widgetInstances();			
		}
		return $widgets;
	}
	
	/**
	 * Returns user's active widget instances's ids only.
	 * @return array|bool
	 */
	public static function getWidgetIds($dashboardIds) {
		
		//get all widget instances for user (via dasshboard IDs) 
		if (is_array($dashboardIds)) {
			$instances = WidgetInstance::select('widget_id')->whereIn('dashboard_id', $dashboardIds)->get();
		} else {
			$instances = WidgetInstance::select('widget_id')->where('dashboard_id','=', $dashboardIds)->get();
			
			Log::info('Type'.get_class($instances));			
		}
		
		$instanceIds = false;
		if( !empty( $instances ) ) {
		    $instanceIds = array();
		    foreach( $instances as &$instance )
		    {
		        $instanceIds[] = $instance->widget_id;
		    }
		}
		return $instanceIds;
	}
	
}
