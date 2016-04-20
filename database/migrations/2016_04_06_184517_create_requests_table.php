<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('requests', function (Blueprint $table) {
			$table->increments('id');
			$table->string('subject');
			$table->date('start_date');
			$table->date('finish_date');

			$table->integer('colony_id')->unsigned();
			$table->foreign('colony_id')->references('id')->on('colonies');

			$table->integer('state_id')->unsigned();
			$table->foreign('state_id')->references('id')->on('states');

			$table->integer('brigade_id')->unsigned();
			$table->foreign('brigade_id')->references('id')->on('request_priorities');

			$table->integer('request_priority_id')->unsigned();
			$table->foreign('request_priority_id')->references('id')->on('request_priorities');

			$table->integer('sector_id')->unsigned();
			$table->foreign('sector_id')->references('id')->on('sectors');

			$table->integer('request_type_id')->unsigned();
			$table->foreign('request_type_id')->references('id')->on('request_types');

			$table->integer('citizen_id')->unsigned();
			$table->foreign('citizen_id')->references('id')->on('citizens');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('requests');
	}
}
