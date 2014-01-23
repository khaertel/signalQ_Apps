<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWidgetInstancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('widgetInstances', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('dashboard_id')->unsigned()->index();
			$table->integer('widget_id')->unsigned()->index();
			$table->foreign('dashboard_id')->references('id')->on('dashboards');
			$table->foreign('widget_id')->references('id')->on('widgets');
			$table->smallInteger('active')->Default(0);
			$table->integer('updates');
			$table->integer('size')->default(11);
			$table->integer('position')->nullable();
			$table->integer('clone')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('widgetInstances');
	}

}
