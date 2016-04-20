<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColoniesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('colonies', function (Blueprint $table) {
			$table->increments('id');
			$table->string('zip', 06);
			$table->string('name', 80);

			$table->integer('colony_scope_id')->unsigned();
			$table->foreign('colony_scope_id')->references('id')->on('colony_scopes');

			$table->integer('settlement_type_id')->unsigned();
			$table->foreign('settlement_type_id')->references('id')->on('settlement_types');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('colonies');
	}
}
