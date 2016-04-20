<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('role_permissions', function (Blueprint $table) {
            $table->integer('permissions_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('permissions_id')->references('id')->on('permissions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('permissions');
    }
}
