<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotMetricWidgetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('metric_widget', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('metric_id')->unsigned()->index();
			$table->integer('widget_id')->unsigned()->index();
			$table->foreign('metric_id')->references('id')->on('metrics')->onDelete('cascade');
			$table->foreign('widget_id')->references('id')->on('widgets')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('metric_widget');
	}

}
