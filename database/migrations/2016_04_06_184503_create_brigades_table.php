<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrigadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('brigades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 80);
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('sectors_brigade', function (Blueprint $table) {
            $table->integer('sector_id')->unsigned();
            $table->integer('brigade_id')->unsigned();

            $table->foreign('sector_id')->references('id')->on('sectors');
            $table->foreign('brigade_id')->references('id')->on('brigades');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brigades');
    }
}
