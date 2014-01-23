<?php
use Illuminate\Database\Migrations\Migration;

class ConfideSetupUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creates the users table
        Schema::create('users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('username');
            $table->string('email');
            $table->string('password');
			$table->string('first_name');
			$table->string('last_name');
			$table->enum('contact_type', array('email','twitter'))->default('email');
			$table->enum('plan', array('Trial', 'Regular', 'Premium'))->default('Trial');
			$table->string('twitter_handle')->nullable();
			$table->string('contact_phone')->nullable();
			$table->string('company');
			$table->string('company_full')->nullable();
			$table->string('op_countries')->nullable();
			$table->string('website')->nullable();
			$table->string('haves')->nullable();
			$table->string('needs')->nullable();
			$table->string('client_logo');
			$table->string('runtime_ip')->nullable();
			$table->string('ps_db_user', 50)->nullable();
			$table->string('ps_db_pass', 50)->nullable(); 
			$table->string('alert_to_name', 50)->nullable();
			$table->string('alert_to_email', 100)->nullable();
			$table->string('system_timezone', 50)->default('UTC');
			$table->integer('ps_internal_vendor')->nullable();
			$table->integer('ps_internal_sip')->nullable();
			$table->integer('ps_internal_um')->nullable();
			$table->integer('ps_env')->nullable();
			$table->string('qdash_apikey', 150)->nullable();
			$table->smallInteger('show_in_directory')->default(1);
			$table->smallInteger('qdash_enabled')->default(0);
			$table->smallInteger('send_alerts')->default(0);
			$table->smallInteger('testmode')->default(0);
            $table->string('confirmation_code');
            $table->boolean('confirmed')->default(false);
            $table->timestamps();
        });

        // Creates password reminders table
        Schema::create('password_reminders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('email');
            $table->string('token');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('password_reminders');
        Schema::drop('users');
    }

}
