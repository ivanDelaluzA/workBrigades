<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitizensTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('citizens', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 80);
			$table->string('address', 150);
			$table->string('email', 80);

			$table->integer('colony_id')->unsigned();
			$table->foreign('colony_id')->references('id')->on('colonies');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('citizens');
	}
}
