<?php

use Robbo\Presenter\Presenter;

class MetricInstancePresenter extends Presenter
{
	public function presentParams() {
		$display ='';
		$params = json_decode($this->parameters, true);
		$display .= 'Environment: '.$params['env'] . '<br />';
		$display .= 'Options: ';
		foreach ($params['options'] as $name => $option) {
			$display .= 'Name: '.$name . '<br />';
			$display .= 'Description: ' . $option['description'] . '<br />';
			$display .= 'Value: ' . $option['value'] . '<br />';
		}
		return $display;
	}
}