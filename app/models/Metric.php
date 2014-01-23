<?php

class Metric extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
	
	public function widgets() {
	    return $this->belongsToMany('Widget', 'metric_widget');
	}
}
