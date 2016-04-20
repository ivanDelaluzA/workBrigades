<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupervitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('supervitions', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 50);
                $table->string('phone', 10);
                $table->string('extension', 50);
                $table->timestamps();
            });

            Schema::create('request_supervision', function (Blueprint $table) {
                $table->integer('request_id')->unsigned();
                $table->integer('supervision_id')->unsigned();

                $table->foreign('request_id')->references('id')->on('sectors');
                $table->foreign('supervision_id')->references('id')->on('brigades');

        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('supervitions');
    }
}
