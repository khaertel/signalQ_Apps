<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWidgetDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('widgetData', function(Blueprint $table) {
			$table->increments('id');
			$table->string('value', 2000)->nullable();
			$table->integer('metricInstance_id')->unsigned()->index();
			$table->foreign('metricInstance_id')->references('id')->on('metricInstances');
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
		Schema::drop('widgetData');
	}

}
