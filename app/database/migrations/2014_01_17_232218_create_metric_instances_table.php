<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMetricInstancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('metricInstances', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->string('parameters', 500);
			$table->enum('alert_type', array('undef','gtoreq', 'ltoreq','none'))->nullable()->default(NULL);
			$table->float('alert_threshold')->nullable();
			$table->integer('updates');
			$table->integer('widgetInstance_id')->unsigned()->index();
			$table->foreign('widgetInstance_id')->references('id')->on('widgetInstances');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('metricInstances');
	}

}
