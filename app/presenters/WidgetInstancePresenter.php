<?php 

use Robbo\Presenter\Presenter;

class WidgetInstancePresenter extends Presenter
{
	public function presentEditLink() {
		return URL::to('dashboard/widgets/'. $this->id . '/edit');
	}
}
?>