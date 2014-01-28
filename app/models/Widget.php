<?php

class Widget extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
	
	public function metrics() {
		return $this->belongsToMany('Metric', 'metric_widget');
	}

	public function dashboards() {
		return $this->belongsToMany('Dashboard', 'widgetInstances');
	}
	
	public function widgetInstances() {
		return $this->hasMany('WidgetInstance');
	}
	
	/**
	 * Returns widget's current metric ids only.
	 * @return array|bool
	 */
	public function currentMetricIds()
	{
	    $metrics = $this->metrics;
	    $metricIds = false;
	    if( !empty( $metrics ) ) {
	        $metricIds = array();
	        foreach( $metrics as &$metric )
	        {
	            $metricIds[] = $metric->id;
	        }
	    }
	    return $metricIds;
	}

	/**
	 * Save metrics inputted from multiselect
	 * @param $inputMetrics
	 */
	public function saveMetrics($inputMetrics)
	{
	    if(! empty($inputMetrics)) {
	        $this->metrics()->sync($inputMetrics);
	    } else {
	        $this->metrics()->detach();
	    }
	}
	
	/**
	 * get only those widget the user has not activated yet
	 * @param $inputMetrics
	 */
	public static function getUnactivated($instanceIds) {
		if (!empty($instanceIds)) {
			return Widget::whereNotIn('id', $instanceIds)->get();
		} else {
			return Widget::all();
		}
	}
	
}
