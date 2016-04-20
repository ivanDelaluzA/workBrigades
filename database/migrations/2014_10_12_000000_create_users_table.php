<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		/*Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('sub_email');
			$table->boolean('is_active');
			$table->string('last_ip');
			$table->string('last_login');
			$table->string('callback_type');

			$table->integer('setting_id')->unsigned();
			$table->foreign('setting_id')->references('id')->on('settings');

			$table->integer('personal_information_id')->unsigned();
			$table->foreign('personal_information_id')->references('id')->on('personal_informations');

			$table->string('remember_token', 100);
			$table->timestamps();
		});
		*/
		Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });
        
		Schema::create('knows', function (Blueprint $table) {
			$table->integer('request_id')->unsigned();
			$table->integer('user_id')->unsigned();

			$table->foreign('request_id')->references('id')->on('requests');
			$table->foreign('user_id')->references('id')->on('users');

		});

		Schema::create('role_user', function (Blueprint $table) {
			$table->integer('role_id')->unsigned();
			$table->integer('user_id')->unsigned();

			$table->foreign('role_id')->references('id')->on('roles');
			$table->foreign('user_id')->references('id')->on('users');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('users');
	}
}
