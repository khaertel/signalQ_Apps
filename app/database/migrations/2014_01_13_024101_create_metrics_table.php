<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMetricsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('metrics', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name',100)->nullable();
			$table->enum('type', array('table','duration','snapshot'))->nullable();
			$table->string('user_parameters', 500)->nullable();
			$table->string('system_parameters', 250)->nullable();
			$table->string('related', 20)->nullable();
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
		Schema::drop('metrics');
	}

}
