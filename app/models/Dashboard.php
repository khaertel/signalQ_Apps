<?php

use Robbo\Presenter\PresentableInterface;

class Dashboard extends Eloquent implements Presentable {
	protected $guarded = array();

	public static $rules = array();
	
	//Relationships
	public function user() {
		return $this->belongsTo('User');
	}
	
	public function widgets() {
	    return $this->belongsToMany('Widget', 'widgetInstances');
	}
	
	public function widgetInstances() {
		return $this->hasMany('WidgetInstance');
	}
	
	public function getPresenter()
	{
	    return new DashboardPresenter($this);
	}
	
	/**
	 * Returns user's dashboard ids 
	 * @return array|bool
	 */
	public static function getAllDashboards($user_id) {
		//get all dashboard objects
		$dashboards = Dashboard::select('id')->where('user_id', '=', $user_id)->get();
		//get only the ids and return them

		$ids = false;
		if( !empty( $dashboards ) ) {
		    $ids = array();
			foreach ($dashboards as $dashboard) {
				$ids[] = $dashboard->id;
			}
		}
		return $ids;
	}
	
}
