<?php

use Robbo\Presenter\PresentableInterface;

class WidgetData extends Eloquent implements Presentable {
	protected $guarded = array();

	protected $table = 'widgetData';
	
	public static $rules = array();
	
	//Relationships
	public function metricInstance() 
	{
		return $this->belongsTo('MetricInstance', 'metricInstance_id');
	}
	
	//set up presenter
	public function getPresenter()
	{
	    return new WidgetDataPresenter($this);
	}


}
