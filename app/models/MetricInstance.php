<?php

use Robbo\Presenter\PresentableInterface;

class MetricInstance extends Eloquent implements Presentable {
	protected $guarded = array();

	protected $table = 'metricInstances';
	
	public static $rules = array();

	//relationship	
	public function widgetInstance() {
		return $this->belongsTo('WidgetInstance', 'widgetInstance_id');
	}
	
	public function widgetData() {
		return $this->hasMany('WidgetData');
	}
	
	//set up presenter
	public function getPresenter()
	{
	    return new MetricInstancePresenter($this);
	}
	
	public function populate(Metric $metric) {
		$user_p = json_decode($metric->user_parameters, true);
		$system_p = json_decode($metric->system_parameters, true);
		
		$this->parameters = json_encode(array_merge($user_p, $system_p));
		
		Log::info('U:' . $this->parameters);
		
		$this->name = $metric->name;	
		return $this;					
	}
	
}
