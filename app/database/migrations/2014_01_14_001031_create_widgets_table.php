<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWidgetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('widgets', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('class');
			$table->string('example_img', 100)->nullable();
			$table->enum('subscription_plan', array('Regular','Premium'));
			$table->enum('area', array('Network','Sales','Finance','Vendors'));
			$table->string('description', 1000)->nullable();
			$table->text('description_ext')->nullable();
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
		Schema::drop('widgets');
	}

}
