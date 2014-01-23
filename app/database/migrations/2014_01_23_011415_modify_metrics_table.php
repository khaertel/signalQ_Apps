<?php

use Illuminate\Database\Migrations\Migration;

class ModifyMetricsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('metrics', function($table) {
			$table->integer('updates_default');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('metrics', function($table) {
			$table->dropColumn('updates_default');
		});
	}

}